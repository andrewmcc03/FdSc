package Coursework2;

/**
 * Created by Andrew McCormick on 02/05/2023
 * Coursework 2
 * Design and Implementation of an Object-Oriented Solution - PersonalAccount.java
 * Program to define a Personal Account Class (extends Customer Account class)
 */

public class PersonalAccount extends CustomerAccount
{
   // Initialises static variable for personal accounts created - the first account is given 1001, for each account created after, 1 is added to the number
   static int perAccNumber = 1001;

   public PersonalAccount()
   {
      super();

   }  // Default Constructor


   // Constructor for storing Personal Accounts
   public PersonalAccount(int aAccRefNo, String aName, String aAddress, double aBalance)
   {
      super(aAccRefNo, aName, aAddress, aBalance);

   }  // Constructor


   public PersonalAccount(String newName, String newAddress)
   {
      newName = getName();
      newAddress = getAddress();

   }  // Alternate Constructor


}  // class