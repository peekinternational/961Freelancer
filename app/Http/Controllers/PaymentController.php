<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\Skills;
use App\Models\Job;
use App\Models\Category;
use App\Models\Countries;
use App\Models\Proposal;
use App\Models\Milestone;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Hash;
use Session;
use Mail;
use Redirect;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user_id = auth()->user()->id;
      $freelancers = Transaction::with('job')->wherefreelancer_id($user_id)->paginate(10);
      $client = Transaction::with('job')->whereclient_id($user_id)->paginate(10);

      return View::make('frontend.transactions')->with([
          'freelancers' => $freelancers,
          'client' => $client
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.escrow-sandbox.com/2017-09-01/transaction/'.$id,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERPWD => 'peek.zeeshan@gmail.com:2350_lLHmA7zo8YytSLb09eAES37Hh9XO40DZV4kBCH06KJSVDxc5XSffwbJweJSQo4YS',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
      ));

      $output = curl_exec($curl);
      echo $output;
      curl_close($curl);
    }

    public function agreeTransaction(Request $request)
    {
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.escrow-sandbox.com/2017-09-01/transaction/'.$request->trans_id,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERPWD => 'peek.zeeshan@gmail.com:2350_lLHmA7zo8YytSLb09eAES37Hh9XO40DZV4kBCH06KJSVDxc5XSffwbJweJSQo4YS',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        // CURLOPT_CUSTOMREQUEST => 'PATCH',
        // CURLOPT_POSTFIELDS => json_encode(
        //     array(
        //         'action' => 'agree',
        //     )
        // )
        CURLOPT_CUSTOMREQUEST => 'PATCH',
            CURLOPT_POSTFIELDS => json_encode(
                array(
                    'action' => 'ship',
                    'shipping_information' => array(
                        'tracking_information' => array(
                            'carrier' => 'UPS',
                            'tracking_id' => '1Z999AA10123456784',
                            'carrier_contact'=> '1-234-567-8912',
                        )
                    )
                )
            )
        // CURLOPT_CUSTOMREQUEST => 'PATCH',
        // CURLOPT_POSTFIELDS => json_encode(
        //     array(
        //         'action' => 'receive',
        //     )
        // )
      ));

      $output = curl_exec($curl);
      echo $output;
      curl_close($curl);
      if ($output) {
          return response()->json(['status'=>'true' , 'message' => 'Agree Transaction', 'data' => $output] , 200);
      }else{
           return response()->json(['status'=>'errorr' , 'message' => 'error occured please try again'] , 200);
      }
    }

    public function linkTransaction(Request $request, $id)
    {
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.escrow-sandbox.com/2017-09-01/transaction/'.$id.'/web_link/agree',
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERPWD => 'peek.zeeshan@gmail.com:2350_lLHmA7zo8YytSLb09eAES37Hh9XO40DZV4kBCH06KJSVDxc5XSffwbJweJSQo4YS',
        CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json'
        ),
      ));

      $output = curl_exec($curl);
      echo $output;
      curl_close($curl);
      // if ($output) {
      //     return response()->json(['status'=>'true' , 'message' => 'Agree Transaction', 'data' => $output] , 200);
      // }else{
      //      return response()->json(['status'=>'errorr' , 'message' => 'error occured please try again'] , 200);
      // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function payNow(Request $request){
      $output = [];
      $curl = curl_init();
      curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.escrow-sandbox.com/integration/pay/2018-03-31',
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_USERPWD => 'peek.zeeshan@gmail.com:2350_lLHmA7zo8YytSLb09eAES37Hh9XO40DZV4kBCH06KJSVDxc5XSffwbJweJSQo4YS',
          CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
          ),
          CURLOPT_POSTFIELDS => json_encode(
              array(
                  'currency' => 'usd',
                  'description' => $request->milestone_detail,
                  'reference' => $request->milestone_detail.'free-'.$request->milestone_job_id,
                  'return_url' => "http://localhost:8000/transactions",
                  'redirect_type' => "automatic",
                  'items' => array(
                      array(
                          'fees' => array(
                              array(
                                  'payer_customer' => auth()->user()->email,
                                  'split' => '1',
                                  'type' => 'escrow',
                              ),
                          ),
                          'inspection_period' => '86400',
                          'quantity' => '1',
                          'schedule' => array(
                              array(
                                  'amount' => $request->milestone_receive_amount,
                                  'beneficiary_customer' => $request->freelancer_email,
                                  'payer_customer' => auth()->user()->email,
                              ),
                          ),
                          'title' => 'Milestone',
                          'description' => $request->milestone_detail,
                          'shipping_type' => 'no_shipping',
                          'type' => 'general_merchandise',
                      ),
                  ),
                  array(
                    'type' => 'broker_fee',
                    'schedule' => array(
                        array(
                            'payer_customer' => auth()->user()->email,
                            'amount' => $request->milestone_service_fee,
                            'beneficiary_customer' => 'me',
                        ),
                    ),
                  ),
                  'parties' => array(
                      array(
                          'address' => array(
                              'city' => 'ABC',
                              'country' => 'PK',
                              'line1' => 'Abc 000',
                              'line2' => 'xyz 000',
                              'post_code' => '000',
                              'state' => 'ABC',
                          ),
                          'agreed' => 'true',
                          'customer' => auth()->user()->email,
                          'date_of_birth' => '1980-10-15',
                          'first_name' => auth()->user()->first_name,
                          'initiator' => 'false',
                          'last_name' => auth()->user()->last_name,
                          'phone_number' => auth()->user()->mobile_number,
                          'lock_email', 'true',
                          'role' => 'buyer',
                      ),
                      array(
                          'agreed' => 'true',
                          'customer' => $request->freelancer_email,
                          'initiator' => 'true',
                          'role' => 'seller',
                      ),
                  ),
              )
          )
      ));
      
      $output = curl_exec($curl);
      // echo $output; die();
      $data = json_decode($output, true);
      // dd($data);
      if($data){
          $transaction = new Transaction;
          $transaction->transcation_id = $data['transaction_id'];
          $transaction->reference = $request->milestone_detail.'-'.$request->milestone_job_id;
          $transaction->job_id = $request->milestone_job_id;
          $transaction->proposal_id = $request->proposal_id;
          $transaction->milestone_id = $request->milestone_id;
          $transaction->freelancer_id = $request->freelancer_id;
          $transaction->client_id = auth()->user()->id;
          $transaction->amount = $request->milestone_receive_amount;
          $transaction->payment_status = 'Processing Payment';
          $transaction->escrow_fee = 00;
          if($transaction->save())
          {
              Job::where('job_id',$request->milestone_job_id)->update(['job_status'=>2]);
              Milestone::where('id',$request->milestone_id)->update(['status'=>'accept']);
              Proposal::where('id',$request->proposal_id)->update(['status'=>2]);
          }
          // return redirect('ongoing-jobs');
          return redirect($data['landing_page']);
      }
      curl_close($curl);
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://api.escrow-sandbox.com/2017-09-01/transaction',
        //     CURLOPT_RETURNTRANSFER => 1,
        //     CURLOPT_USERPWD => 'peek.zeeshan@gmail.com:2350_lLHmA7zo8YytSLb09eAES37Hh9XO40DZV4kBCH06KJSVDxc5XSffwbJweJSQo4YS',
        //     CURLOPT_HTTPHEADER => array(
        //         'Content-Type: application/json'
        //     ),

        //     CURLOPT_POSTFIELDS => json_encode(
        //         array(
        //             'parties' => array(
        //                 array(
        //                   'role' => 'buyer',
        //                   'customer' => 'me',
        //                 ),
        //                 array(
        //                     'role' => 'seller',
        //                     'customer' => $request->freelancer_email,
        //                 ),
        //             ),
        //             'currency' => 'usd',
        //             'description' => $request->milestone_detail,
        //             'items' => array(
        //                 array(
        //                     'title' => 'Milestone Payment',
        //                     'description' => $request->milestone_detail,
        //                     'type' => 'general_merchandise',
        //                     'inspection_period' => 86400,
        //                     'quantity' => 1,
        //                     'schedule' => array(
        //                         array(
        //                             'amount' => $request->milestone_amount,
        //                             'payer_customer' => 'me',
        //                             'beneficiary_customer' => $request->freelancer_email,
        //                         )
        //                     )
        //                 )
        //             )
        //         )
        //     )

        // ));

        // $output = curl_exec($curl);
        // $data = json_decode($output);
        // $fee = (float) $data->items[0]->fees[0]->amount;
        // $total = $request->milestone_amount + $fee;

        // if($data){
        //     $transaction = new Transaction;
        //     $transaction->transcation_id = $data->id;
        //     $transaction->job_id = $request->milestone_job_id;
        //     $transaction->proposal_id = $request->proposal_id;
        //     $transaction->milestone_id = $request->milestone_id;
        //     $transaction->freelancer_id = $request->freelancer_id;
        //     $transaction->client_id = auth()->user()->id;
        //     $transaction->amount = $request->milestone_amount;
        //     $transaction->escrow_fee = $fee;
        //     if($transaction->save())
        //     {
        //         Job::where('job_id',$request->milestone_job_id)->update(['job_status'=>2]);
        //         Milestone::where('id',$request->milestone_id)->update(['status'=>'accept']);
        //         Proposal::where('id',$request->proposal_id)->update(['status'=>2]);
        //     }
        //     return redirect('ongoing-jobs');
        // }
        // curl_close($curl);
        
    }
    public function shipProduct(Request $request){
      $transcation_id = $request->trans_id;
      $curl = curl_init();
      curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.escrow-sandbox.com/2017-09-01/transaction/'.$transcation_id,
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_USERPWD => 'peek.zeeshan@gmail.com:2350_lLHmA7zo8YytSLb09eAES37Hh9XO40DZV4kBCH06KJSVDxc5XSffwbJweJSQo4YS',
          CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
          ),
          CURLOPT_CUSTOMREQUEST => 'PATCH',
          CURLOPT_POSTFIELDS => json_encode(
              array(
                  'action' => 'ship',
                  'shipping_information' => array(
                    'authorization_type' => 'push',
                  )
              )
          )
      ));

      $output = curl_exec($curl);
      echo $output;
      curl_close($curl);
    }

    public function receiveProduct(Request $request){
      $transcation_id = $request->trans_id;
      
      $curl = curl_init();
      curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.escrow-sandbox.com/2017-09-01/transaction/'.$transcation_id,
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_USERPWD => 'peek.zeeshan@gmail.com:2350_lLHmA7zo8YytSLb09eAES37Hh9XO40DZV4kBCH06KJSVDxc5XSffwbJweJSQo4YS',
          CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
          ),
          CURLOPT_CUSTOMREQUEST => 'PATCH',
          CURLOPT_POSTFIELDS => json_encode(
              array(
                  'action' => 'receive',
                  'role' => 'buyer'
              )
          )
      ));


      $output = curl_exec($curl);
      echo $output;
      curl_close($curl);
    }
}
