package Coursework2;

import java.text.DecimalFormat;     // Imports DecimalFormat utility for formatting numbers, in this case, currency and percentages

/**
 * Created by Andrew McCormick on 02/05/2023
 * Coursework 2
 * Design and Implementation of an Object-Oriented Solution - CustomerAccount.java
 * Program to define the Customer Account Class
 */

abstract public class CustomerAccount     // Start of abstract class for Customer Accounts
{
   DecimalFormat dfCurrency = new DecimalFormat("'£'#,##0.00");     // Uses decimal format utility for formatting and displaying doubles, such as the account balance

   // Define instance variables
   private int accRefNo;
   private String name;
   private String address;
   private double balance;
   double discount = 0;    // Initialises 'discount' variable to 0


   // Constructors
   public CustomerAccount()
   {

   }  // Default constructor

   public CustomerAccount(int newAccRefNo, String newName, String newAddress)
   {
      accRefNo = newAccRefNo;
      name = newName;
      address = newAddress;
      balance = 0;

   }  // Alternate constructor


   // Constructor method used for creating Personal Accounts - Stores Account Reference Number, Name, Address and Balance
   public CustomerAccount(int newAccRefNo, String newName, String newAddress, double newBalance)
   {
      accRefNo = newAccRefNo;
      name = newName;
      address = newAddress;
      balance = 0;

   }  // Alternate constructor


   // Constructor method used for creating Business Accounts - Stores Account Reference Number, Name, Address, Balance and Discount
   public CustomerAccount(int newAccRefNo, String newName, String newAddress, double newBalance, double newDiscount)
   {
      accRefNo = newAccRefNo;
      name = newName;
      address = newAddress;
      balance = 0;
      discount = 0;

   }  // Alternate constructor


   // Get Methods

   // Returns the account reference number
   protected int getAccRefNo()
   {
      return accRefNo;

   }  // getAccRefNo

   // Returns the account name
   protected String getName()
   {
      return name;

   }  // getName

   // Returns the account address
   protected String getAddress()
   {
      return address;

   }  // getAddress

   // Returns the account balance
   protected double getBalance()
   {
      return balance;

   }  // getBalance

   // Returns the discount associated with an account
   protected double getDiscount()
   {
      return discount;

   }  // getDiscount


   // Set Methods

   // Applies a given account reference number
   protected void setAccRefNo(int aAccRefNo)
   {
      accRefNo = aAccRefNo;

   }  // setName

   // Applies a given name
   protected void setName(String aName)
   {
      name = aName;

   }  // setName

   // Applies a given address
   protected void setAddress(String aAddress)
   {
      address = aAddress;

   }  // setAddress

   // Applies a given balance
   public void setBalance(double aBalance)
   {
      balance = aBalance;

   }  // setBalance

   // Applies a given discount
   protected void setDiscount(double newDiscount)
   {
      discount = newDiscount;

   }  // setDiscount


   // Method used for making payments
   protected double payment(double paymentAmount)
   {
      return balance = balance - paymentAmount;

   }  // payment


   // Method for recording a sale
   protected double recordSale(double saleAmount)
   {
      return balance = balance + saleAmount;

   }  // recordSale


   // Method for overriding default .toString() method
   public String toString()
   {
      return "Customer with Reference Number '" + accRefNo + "' is called " + name + ", and their address is " + address + ".\n";

   }  // toString


   // Method for outputting an account balance, with formatting
   protected void displayBalance()
   {
      System.out.println("Current Account Balance:          " + dfCurrency.format(balance));

   }  // displayBalance

   // Method for outputting account details, with formatting
   protected void displayAccount()
   {
      System.out.println("\nAccount Details");
      System.out.println("***************");
      System.out.println("Account Number:    " + accRefNo);
      System.out.println("Name:              " + name);
      System.out.println("Address:           " + address);
      System.out.println("Balance:           " + dfCurrency.format(balance));

   }  // displayAccount


}  // class