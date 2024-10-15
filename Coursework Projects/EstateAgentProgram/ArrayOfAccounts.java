package Coursework2;

import java.util.ArrayList;      // Imports ArrayList utility for storing the necessary accounts array and an array to store account reference numbers
import java.util.List;     // Imports List utility for creating the array list

/**
 * Created by Andrew McCormick on 05/05/23
 * Program to define an ArrayOfAccounts class which is used to hold pointers to each account which is created by the user
 */

public class ArrayOfAccounts     // Start of Array (for accounts) class
{
   private List<CustomerAccount> accounts;      // Creates Array List, specifying 'CustomerAccount' class

   // Constructor to create an array of references to account objects
   public ArrayOfAccounts()
   {
      accounts = new ArrayList<CustomerAccount>();

   }  // ArrayOfAccounts

   // Return a reference to the current account
   protected CustomerAccount getCurrent(int position)
   {
      return accounts.get(position);

   }  // getCurrent

   // Return the number of accounts registered by the user
   protected int getNoOfAccounts()
   {
      return accounts.size();

   }  // getNoOfAccounts

   // Return first line of the address of an account at a particular index position
   protected int getAccount(int position)
   {
      return accounts.get(position).getAccRefNo();

   }  // getAccount

   // Add account object to the array
   protected void insert(CustomerAccount aCustomerAccount)
   {
      accounts.add(aCustomerAccount);
      System.out.println("\n" + aCustomerAccount.getAddress() + " added.");

   }  // insert

   // Remove account object from the array
   protected void removeAccount(int position)
   {
      System.out.println(getCurrent(position).getAddress() + " removed.");
      accounts.remove(position);

   }  // removeAccount

   // **************
   // SEARCH METHODS
   // **************

   // Return index position of account or number = -1 if not found
   protected int findAccountByRefNo(int accRefNo)
   {
      boolean found = false;
      int index = 0, position = -1;

      // Keep checking until the account is found or all accounts have been checked
      do
      {
         // Check if the street at the index position equals the street passed as the parameter
         if (accounts.get(index).getAccRefNo() == accRefNo)
         {
            found = true;
            position = index;

         }
         index++;

      } while ((!found) && (index < accounts.size()));
      // Return the index position of the account with the required reference number (or -1 if not found)
      return position;

   }  // findAccountByRefNo

   // *************
   // PRINT METHODS
   // *************

   // Method for displaying all accounts created in the array
   protected void displayAllAccounts()
   {
      for (CustomerAccount anAccount : accounts)
      {
         anAccount.displayAccount();

      }  // for

   }  // displayAllAccounts


}  // class