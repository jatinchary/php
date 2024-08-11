#include<bits/stdc++.h>
using namespace std;
 
 class Cars {
    public:
    string car_id;
    string car_brand;
    string car_type;
    int car_price;
    Dealer d1;


      void about_car(){
         cout<< "the car is"<< car_brand << "car type is" << car_type << "and its price is only" << car_price  << endl;
      }
      

   
 };

 class Dealer: public Cars{
    public:
    int dealer_id;
    string dealer_name;
    string rating;

 }
 class Monthly_emi: public Cars {
   int emi =(car_price-down_payment) / no_years;
 }



 class Payment_details: public Cars{
    public:

    int down_payment;
    Monthly_emi;
    string mode_of_payment;
    string payment_date;


void payment_details(){
        cout << "down payment :" << down_payment << endl;
        cout << "monthly emi :" << monthly_emi << endl;
        cout << "mode of payments :" << mode_of_payment << endl;
        cout << "payment date:" << payment_date << endl;
    }

 };


 

 class Owner_details : public Cars{


    string owner_name;
    string owner_phone;
    string gender;
    string mail;
    int age;
    string adress;
    int adhar_no;
    int citizenship;

     void owner(){
        cout<< "person who own the car id "<< owner_name << ", his contact number is"<< owner_phone << endl;
    }

 };

 class Order : public Cars ,public Owner_details ,public Dealer , public Payment_details{

   owner();
   about_car();
   dealer_id;
   monthly_emi;
   


 }


int main()
{
     Cars car1;
     car1.car_brand= "Lamborgini";
     car1.car_type= "SUV";
     car1.car_price= 99999999;


     car1.about();
     return 0;
} 