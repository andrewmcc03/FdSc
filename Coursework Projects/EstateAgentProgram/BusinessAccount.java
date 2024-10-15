package Coursework2;

/**
 * Created by Andrew McCormick on 02/05/2023
 * Coursework 2
 * Design and Implementation of an Object-Oriented Solution - BusinessAccount.java
 * Program to define a Business Account Class (extends Customer Account class)
 */

public class BusinessAccount extends CustomerAccount
{
   // Initialises static variable for business accounts created - the first account is given 2001, for each account created after, 1 is added to the number
   static int busAccNumber = 2001;

   // Initialises 'discount' variable to 0
   double discount = 0;

   public BusinessAccount()
   {
      super();

   }  // Default Constructor

   // Constructor for storing Personal Accounts - Stores Account Reference Number, Name, Address and Balance
   public BusinessAccount(int aAccRefNo, String aName, String aAddress)
   {
      super(aAccRefNo, aName, aAddress);

   }  // Constructor


   // Constructor for storing Personal Accounts - Stores Account Reference Number, Name, Address, Balance and Discount
   public BusinessAccount(int aAccRefNo, String aName, String aAddress, double aBalance, double aDiscount)
   {
      super(aAccRefNo, aName, aAddress, aBalance, aDiscount);

   }  // Constructor


   // Returns the discount associated with an account
   protected double getDiscount()
   {
      return discount;

   }  // getDiscount

   // Applies a given discount
   protected void setDiscount(double newDiscount)
   {
      discount = newDiscount;

   }  // setDiscount


   // Method for overriding default .toString() method
   @Override
   public String toString()
   {
      return "Customer with Reference Number '" + getAccRefNo() + "' is called " + getName() + ", and their address is " + getAddress() + "." + "\n";    // Outputs String of account reference number, name and address

   }  // toString


}  // class