package Coursework2;

import java.text.DecimalFormat;     // Imports DecimalFormat utility for formatting numbers, in this case, currency and percentages
import java.util.Scanner;     // Imports Scanner utility for allowing input through keyboard
import java.util.ArrayList;      // Imports ArrayList utility for storing the necessary accounts array and an array to store account reference numbers
import java.util.*;     // Automatically imports utilities based on code

/**
 * Created by Andrew McCormick on 02/05/2023
 * Coursework 2
 * Design and Implementation of an Object-Oriented Solution - Company.java
 * Program to run an interactive display for creating and editing accounts using the relevant external classes
 */

public class Company    // Start of program class
{
   // Start of main
   public static void main(String[] args)
   {

      Scanner keyboard = new Scanner(System.in);      // Uses scanner for allowing input through keyboard
      DecimalFormat dfCurrency = new DecimalFormat("'£'#,##0.00");     // Uses decimal format utility for formatting and displaying doubles, such as the account balance
      DecimalFormat dfPercent = new DecimalFormat("#,##0.00'%'");    // Uses decimal format utility for formatting and displaying percentages, such as the discount

      ArrayOfAccounts myArray = new ArrayOfAccounts();      // Main Array for storing all accounts, personal and business

      ArrayList<Integer> accRefNoList = new ArrayList<>();     // Array for storing all account reference numbers, both Personal and Business accounts

      // Initialises 'mainChoice' (Main Menu Choice) variable to be -1
      int mainChoice = -1;

      // Start of Main Menu Loop
      while (mainChoice != 0)     // While choice is NOT 0
      {
         // Main Menu
         System.out.println("\n**** ABC BUILDING COMPANY ****");
         System.out.println("1 - Create a New Customer Account");
         System.out.println("2 - Existing Customer");
         System.out.println("0 - Exit\n");

         System.out.print("Enter your choice: ");      // Prompts user for choice
         String mainChoiceInput = keyboard.nextLine();      // Takes in input as String and gives it a separate variable

         System.out.println();      // Outputs space (used here instead of constant '\n' for consistency)

         try
         {
            mainChoice = Integer.parseInt(mainChoiceInput);    // Tries to parse String input to int

         }  // try
         catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
         {
            System.out.println("Invalid choice.");      // Outputs 'Invalid choice' message (catch, main menu)
            continue;      // Continues on with code

         }  // catch

         if (mainChoice < 0 || mainChoice > 2)    // If choice is less than 0 or greater than 2 ...
         {
            System.out.println("Invalid choice.");      // Outputs 'Invalid choice' message (if, main menu)
            continue;      // Continues on with code

         }  // if

         // Start of Main Menu switch block
         switch (mainChoice)
         {
            // Option 1 - Create a New Customer Account
            case 1:

               int pbChoice = -1;      // Initialises 'pbChoice' (Personal or Business Customer Menu Choice) variable to be -1
               boolean pbChoiceValid = false;      // Initialises 'pbChoiceValid' to false for use in the following while loop

               System.out.print("Name:              ");     // Prompts user for name
               String name = keyboard.nextLine();     // Sets input to 'name' variable

               System.out.print("Address:           ");     // Prompts user for address
               String address = keyboard.nextLine();     // Sets input to 'address' variable

               // Start of Personal or Business choice block
               while (!pbChoiceValid)     // While choice is NOT valid
               {
                  // Personal or Business Customer Menu
                  System.out.println("\nAre you:");
                  System.out.println("1 - Personal Customer");
                  System.out.println("2 - Business Customer\n");

                  System.out.print("Enter your choice: ");      // Prompts user for choice
                  String pbChoiceInput = keyboard.nextLine();     // Takes in input as String and gives it a separate variable

                  System.out.println();      // Outputs space (used here instead of constant '\n' for consistency)

                  try
                  {
                     pbChoice = Integer.parseInt(pbChoiceInput);     // Tries to parse String input to int

                  }  // try
                  catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
                  {
                     System.out.println("Invalid choice.");     // Outputs 'Invalid choice' message (catch, pb menu)
                     continue;      // Continues on with code

                  }  // catch

                  if (pbChoice < 1 || pbChoice > 2)    // If choice is less than 1 or greater than 2 ...
                  {
                     System.out.println("Invalid choice.");     // Outputs 'Invalid choice' message (if, pb menu)
                     continue;      // Continues on with code

                  }  // if

                  pbChoiceValid = true;      // Once all conditions are met and validated, 'pbChoiceValid' is set to true, ending the while loop

               }  // while

               // If statement for choice 1, meaning the user has chosen a Personal Account
               if (pbChoice == 1)
               {
                  int accRefNo = PersonalAccount.perAccNumber++;     // Increments 'perAccNumber' variable
                  double balance = 0;     // Initialises 'balance' variable to 0

                  accRefNoList.add(accRefNo);      // Adds each account reference number to a separate array list for use in the sub-menu functions

                  // Outputs account details
                  System.out.println("Account Details");
                  System.out.println("***************");
                  System.out.println("Account Number:    "  + accRefNo);
                  System.out.println("Name:              "  + name);
                  System.out.println("Address:           "  + address);
                  System.out.println("Balance:           "  + dfCurrency.format(balance));

                  myArray.insert(new PersonalAccount(accRefNo, name, address, balance));     // Insert method for inserting the string of values to the object

               }

               // If statement for choice 2, meaning the user has chosen a Business Account
               if (pbChoice == 2)
               {
                  int accRefNo = BusinessAccount.busAccNumber++;     // Increments 'busAccNumber' variable
                  double balance = 0;     // Initialises 'balance' variable to 0
                  double discount = 0;    // Initialises 'discount' variable to 0

                  accRefNoList.add(accRefNo);      // Adds each account reference number to a separate array list for use in the sub-menu functions

                  // Outputs account details
                  System.out.println("Account Details");
                  System.out.println("***************");
                  System.out.println("Account Number:    "  + accRefNo);
                  System.out.println("Name:              "  + name);
                  System.out.println("Address:           "  + address);
                  System.out.println("Balance:           "  + dfCurrency.format(balance));
                  System.out.println("Discount:          "  + dfPercent.format(discount));

                  myArray.insert(new BusinessAccount(accRefNo, name, address, balance, discount));     // Insert method for inserting the string of values to the object

               }

               break;

            // Option 2 - Existing Customer
            case 2:

               int perSubChoice = -1;     // Initialises 'perSubChoice' (Existing Customer Menu Choice for Personal Accounts) variable to be -1
               int busSubChoice = -1;     // Initialises 'busSubChoice' (Existing Customer Menu Choice for Business Accounts) variable to be -1
               int customerNum = 0;    // Initialises 'customerNum' (customer account number the user enters) variable to 0

               System.out.print("Enter the Customer Number: ");      // Prompts user for the customer account number
               String customerNumInput = keyboard.nextLine();     // Takes in input as String and gives it a separate variable

               try
               {
                  customerNum = Integer.parseInt(customerNumInput);     // Tries to parse String input to int

               }  // try
               catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
               {
                  System.out.println("\nInvalid customer account number.");      // Outputs 'Invalid Customer Account Number' message (catch, customerNumInput)
                  continue;      // Continues on with code

               }  // catch

               if (customerNumInput.length() != 4)
               {
                  System.out.println("\nInvalid customer account number. It must be 4 digits in length.");      // Outputs 'Invalid Customer Account Number' message, notifying the user the input must be 4 digits in length (catch, customerNumInput)
                  continue;      // Continues on with code

               }  // if

               /* Start of Personal and Business Menu blocks */

               if (accRefNoList.contains(customerNum))      // Check if the number is in the Personal or Business Account Reference Number list
               {
                  // If statement block to determine whether the user's account is Personal or Business, after validating if the number is in the list
                  if (customerNum > 1000 && customerNum < 2000)
                  {
                     System.out.println("\nPersonal Customer - Account Reference Number: " + customerNum);     // Outputs line showing account type and its reference number

                     /* Start of menu switch for Personal Accounts */
                     // Start of Sub-Menu Loop
                     while (perSubChoice != 0)     // While choice is NOT 0
                     {
                        // Existing Customer Sub-menu
                        System.out.println("\n1 – Record a new sale");
                        System.out.println("2 – Make a payment");
                        System.out.println("3 – Display current balance");
                        System.out.println("4 – Display all account details");
                        System.out.println("0 – Return to Main Menu\n");

                        System.out.print("Enter your choice: ");     // Prompts user for choice
                        String perSubChoiceInput = keyboard.nextLine();    // Takes in input as String and gives it a separate variable

                        System.out.println();      // Outputs space (used here instead of constant '\n' for consistency)

                        try
                        {
                           perSubChoice = Integer.parseInt(perSubChoiceInput);      // Tries to parse String input to int

                        }  // try
                        catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
                        {
                           System.out.print("Invalid choice.\n");    // Outputs 'Invalid choice' message (catch, sub-menu)
                           continue;      // Continues on with code

                        }  // catch

                        if (perSubChoice < 0 || perSubChoice > 4)    // If choice is less than 0 or greater than 4 ...
                        {
                           System.out.print("Invalid choice.\n");    // Outputs 'Invalid choice' message (if, sub-menu)
                           continue;      // Continues on with code

                        }  // if

                        // Start of Existing Customer menu switch block (Personal Accounts)
                        switch (perSubChoice)
                        {
                           // Note: At this point where the user has entered a valid account reference number, all the below
                           //       sub-switch cases will use that number until the user enters 0 to return to the main menu.

                           // Option 1 - Record a new sale
                           case 1:

                              // Initialises 'orderAmount' variable
                              double orderAmount = 0;

                              // Gets index position of current account
                              int index = myArray.findAccountByRefNo(customerNum);

                              myArray.getCurrent(index).displayBalance();     // Uses index position for the account to display that account's balance

                              System.out.print("\nWhat is the amount of your order? £");     // Prompts user for order amount
                              String orderAmountInput = keyboard.nextLine();     // Takes in input as String and gives it a separate variable

                              System.out.println();      // Outputs space (used here instead of constant '\n' for consistency)

                              try
                              {
                                 orderAmount = Double.parseDouble(orderAmountInput);      // Tries to parse String input to double

                              }  // try
                              catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
                              {
                                 System.out.print("Invalid order amount.\n");     // Outputs 'Invalid order amount' message (catch, orderAmountInput)
                                 continue;      // Continues on with code

                              }  // catch

                              if (orderAmount <= 0 || orderAmount > 2147483647)    // If choice is less than or equal to 0 or greater than 2147483647 ...
                              {
                                 System.out.print("Invalid order amount.\n");     // Outputs 'Invalid order amount' message (if, orderAmountInput)
                                 continue;      // Continues on with code

                              }  // if

                              // Initialises 'newBalanceAfterSale' variable
                              double newBalanceAfterSale = 0;

                              // Record Sale
                              newBalanceAfterSale = myArray.getCurrent(index).recordSale(orderAmount);

                              // Set new balance
                              myArray.getCurrent(index).setBalance(newBalanceAfterSale);

                              // Outputs new, updated account balance
                              System.out.println("New account balance:              " + dfCurrency.format(newBalanceAfterSale));

                              break;      // Breaks back to sub-menu

                           // Option 2 - Make a payment
                           case 2:

                              // Gets index position of current account
                              index = myArray.findAccountByRefNo(customerNum);

                              // First displays the user's current account balance
                              myArray.getCurrent(index).displayBalance();     // Uses index position for the account to display that account's balance

                              double paymentAmount = 0;     // Initialises 'paymentAmount' variable
                              double newBalanceAfterPayment = 0;     // Initialises 'newBalanceAfterPayment' variable

                              System.out.print("\nHow much are you depositing?      £");     // Prompts user for payment amount
                              String paymentAmountInput = keyboard.nextLine();      // Takes in input as String and gives it a separate variable

                              System.out.println();      // Outputs space (used here instead of constant '\n' for consistency)

                              try
                              {
                                 paymentAmount = Double.parseDouble(paymentAmountInput);     // Tries to parse String input to double

                              }  // try
                              catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
                              {
                                 System.out.print("Invalid payment amount.\n");      // Outputs 'Invalid payment amount' message (catch, paymentAmountInput)
                                 continue;      // Continues on with code

                              }  // catch

                              if (paymentAmount <= 0 || paymentAmount > 2147483647)    // If choice is less than or equal to 0 or greater than 2147483647 ...
                              {
                                 System.out.print("Invalid payment amount.\n");      // Outputs 'Invalid payment amount' message (if (1), paymentAmountInput)
                                 continue;      // Continues on with code

                              }  // if

                              if (paymentAmount > myArray.getCurrent(index).getBalance())    // If the payment amount is greater than the current account balance ...
                              {
                                 System.out.print("Invalid payment amount. Payment amount is greater than the balance.\n");      // Outputs 'Invalid payment amount' message, notifying the user the amount is greater than the account's balance (if (2), paymentAmountInput)
                                 continue;      // Continues on with code

                              }  // if

                              // Make a payment
                              newBalanceAfterPayment = myArray.getCurrent(index).payment(paymentAmount);

                              // Set new balance
                              myArray.getCurrent(index).setBalance(newBalanceAfterPayment);

                              // Outputs new, updated account balance
                              System.out.println("New account balance:              " + dfCurrency.format(newBalanceAfterPayment));

                              break;      // Breaks back to sub-menu

                           // Option 3 - Display current balance
                           case 3:

                              // Gets index position of current account
                              index = myArray.findAccountByRefNo(customerNum);

                              System.out.println("Account Reference Number:         " + customerNum);    // Outputs account reference number
                              myArray.getCurrent(index).displayBalance();     // Uses index position for the account to display that account's balance

                              break;      // Breaks back to sub-menu

                           // Option 4 - Display all account details
                           case 4:

                              // Gets index position of current account
                              index = myArray.findAccountByRefNo(customerNum);

                              System.out.println("Details for Account Reference Number: " + customerNum);      // Outputs account reference number
                              myArray.getCurrent(index).displayAccount();      // Finds index position of the account reference number, then uses it to display that account's details

                              break;      // Breaks back to sub-menu

                           // Option 0 - Return to Main Menu
                           case 0:
                              System.out.println("Returning to Main Menu...");      // Outputs return message

                              break;      // Breaks out of sub-menu, back to main menu

                        }  // Existing Customer Sub-switch

                     }  // while

                  }  // if

                  /* Business Accounts Menu */
                  if (customerNum > 2000 && customerNum < 3000)
                  {
                     System.out.println("\nBusiness Customer - Account Reference Number: " + customerNum);     // Outputs line showing account type and its reference number

                     /* Start of menu switch for Business Accounts */

                     // Start of Sub-Menu Loop
                     while (busSubChoice != 0)     // While choice is NOT 0
                     {
                        // Existing Customer Sub-menu
                        System.out.println("\n1 – Record a new sale");
                        System.out.println("2 – Make a payment");
                        System.out.println("3 – Display current balance");
                        System.out.println("4 – Display all account details");
                        System.out.println("5 – Change discount to be applied");
                        System.out.println("0 – Return to Main Menu\n");

                        System.out.print("Enter your choice: ");     // Prompts user for choice
                        String busSubChoiceInput = keyboard.nextLine();    // Takes in input as String and gives it a separate variable

                        System.out.println();      // Outputs space (used here instead of constant '\n' for consistency)

                        try
                        {
                           busSubChoice = Integer.parseInt(busSubChoiceInput);      // Tries to parse String input to int

                        }  // try
                        catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
                        {
                           System.out.print("Invalid choice.\n");    // Outputs 'Invalid choice' message (catch, sub-menu)
                           continue;      // Continues on with code

                        }  // catch

                        if (busSubChoice < 0 || busSubChoice > 5)    // If choice is less than 0 or greater than 5 ...
                        {
                           System.out.print("Invalid choice.\n");    // Outputs 'Invalid choice' message (if, sub-menu)
                           continue;      // Continues on with code

                        }  // if

                        // Start of Existing Customer menu switch block (Business Accounts)
                        switch (busSubChoice)
                        {
                           // Note: At this point where the user has entered a valid account reference number, all the below
                           //       sub-switch cases will use that number until the user enters 0 to return to the main menu.

                           // Option 1 - Record a new sale
                           case 1:

                              // Initialises 'orderAmount' variable
                              double orderAmount = 0;

                              // Gets index position of current account
                              int index = myArray.findAccountByRefNo(customerNum);

                              myArray.getCurrent(index).displayBalance();     // Uses index position for the account to display that account's balance

                              System.out.print("\nWhat is the amount of your order? £");     // Prompts user for order amount
                              String orderAmountInput = keyboard.nextLine();     // Takes in input as String and gives it a separate variable

                              System.out.println();      // Outputs space (used here instead of constant '\n' for consistency)

                              try
                              {
                                 orderAmount = Double.parseDouble(orderAmountInput);      // Tries to parse String input to double

                              }  // try
                              catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
                              {
                                 System.out.print("Invalid order amount.\n");     // Outputs 'Invalid order amount' message (catch, orderAmountInput)
                                 continue;      // Continues on with code

                              }  // catch

                              if (orderAmount <= 0 || orderAmount > 2147483647)    // If choice is less than or equal to 0 or greater than 2147483647 ...
                              {
                                 System.out.print("Invalid order amount.\n");     // Outputs 'Invalid order amount' message (if, orderAmountInput)
                                 continue;      // Continues on with code

                              }  // if

                              // Initialises 'newBalanceAfterSale' variable
                              double newBalanceAfterSale = 0;

                              // Record Sale
                              newBalanceAfterSale = myArray.getCurrent(index).recordSale(orderAmount);

                              // Set new balance
                              myArray.getCurrent(index).setBalance(newBalanceAfterSale);

                              // Outputs new, updated account balance
                              System.out.println("New account balance:              " + dfCurrency.format(newBalanceAfterSale));

                              break;      // Breaks back to sub-menu

                           // Option 2 - Make a payment (with discount applied)
                           case 2:

                              // Gets index position of current account
                              index = myArray.findAccountByRefNo(customerNum);

                              // First displays the user's current account balance
                              myArray.getCurrent(index).displayBalance();     // Uses index position for the account to display that account's balance

                              // Output current discount
                              System.out.println("Current Account Discount:         " + dfPercent.format(myArray.getCurrent(index).getDiscount()));

                              // Initialises variables used for getting discounts, balances and applying discounts to payments
                              double currentDiscount, currentBalance, paymentAmount, newBalanceAfterPayment;

                              System.out.print("\nHow much are you depositing?      £");     // Prompts user for payment amount
                              String paymentAmountInput = keyboard.nextLine();      // Takes in input as String and gives it a separate variable

                              System.out.println();      // Outputs space (used here instead of constant '\n' for consistency)

                              try
                              {
                                 paymentAmount = Double.parseDouble(paymentAmountInput);     // Tries to parse String input to double

                              }  // try
                              catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
                              {
                                 System.out.print("Invalid payment amount.\n");      // Outputs 'Invalid payment amount' message (catch, paymentAmountInput)
                                 continue;      // Continues on with code

                              }  // catch

                              if (paymentAmount <= 0 || paymentAmount > 2147483647)    // If choice is less than or equal to 0 or greater than 2147483647 ...
                              {
                                 System.out.print("Invalid payment amount.\n");      // Outputs 'Invalid payment amount' message (if (1), paymentAmountInput)
                                 continue;      // Continues on with code

                              }  // if

                              if (paymentAmount > myArray.getCurrent(index).getBalance())    // If the payment amount is greater than the current account balance ...
                              {
                                 System.out.print("Invalid payment amount. Payment amount is greater than the balance.\n");      // Outputs 'Invalid payment amount' message, notifying the user the amount is greater than the account's balance (if (2), paymentAmountInput)
                                 continue;      // Continues on with code

                              }  // if

                              // Get current discount
                              currentDiscount = myArray.getCurrent(index).getDiscount();
                              currentDiscount = currentDiscount / 100;     // At this point, 'currentDiscount' variable should be a decimal (e.g., If getDiscount() returns 10, 'currentDiscount' will become 0.1)

                              // Get current balance
                              currentBalance = myArray.getCurrent(index).getBalance();

                              // Apply current discount to payment before making payment
                              newBalanceAfterPayment = currentBalance - (paymentAmount - (paymentAmount * currentDiscount));

                              // Set new balance
                              myArray.getCurrent(index).setBalance(newBalanceAfterPayment);

                              // Outputs new, updated account balance
                              System.out.println("New account balance:              " + dfCurrency.format(newBalanceAfterPayment));

                              break;      // Breaks back to sub-menu

                           // Option 3 - Display current balance
                           case 3:

                              // Gets index position of current account
                              index = myArray.findAccountByRefNo(customerNum);

                              System.out.println("Account Reference Number:         " + customerNum);    // Outputs account reference number
                              myArray.getCurrent(index).displayBalance();     // Uses index position for the account to display that account's balance

                              break;      // Breaks back to sub-menu

                           // Option 4 - Display all account details
                           case 4:

                              // Gets index position of current account
                              index = myArray.findAccountByRefNo(customerNum);

                              System.out.println("Details for Account Reference Number: " + customerNum);      // Outputs account reference number
                              myArray.getCurrent(index).displayAccount();      // Finds index position of the account reference number, then uses it to display that account's details

                              break;      // Breaks back to sub-menu

                           // Option 5 - Change Discount to be Applied
                           case 5:

                              double discountValue = 0;     // Initialises 'discountInput' variable used for inputting a new discount
                              double newDiscount = 0;    // Initialises 'newDiscount' variable used for apply the new discount

                              // Gets index position of current account
                              index = myArray.findAccountByRefNo(customerNum);

                              // Output current discount
                              System.out.println("Current Account Discount:         " + dfPercent.format(myArray.getCurrent(index).getDiscount()));

                              System.out.print("\nWhat is the new discount?        %");     // Prompts user for discount value
                              String discountValueInput = keyboard.nextLine();      // Takes in input as String and gives it a separate variable

                              System.out.println();      // Outputs space (used here instead of constant '\n' for consistency)

                              try
                              {
                                 discountValue = Double.parseDouble(discountValueInput);     // Tries to parse String input to double

                              }  // try
                              catch (NumberFormatException e)     // Catches any attempt to convert a String with an incorrect format to an integer or a double
                              {
                                 System.out.print("Invalid discount.\n");      // Outputs 'Invalid discount value' message (catch, discountValueInput)
                                 continue;      // Continues on with code

                              }  // catch

                              if (discountValue < 0 || discountValue > 100)    // If choice is less than 0 or greater than 100 ...
                              {
                                 System.out.print("Invalid discount. Percentage must be between 0-100. \n");      // Outputs 'Invalid discount value' message, notifying the user that the percentage must be between 0 and 100 (if, discountValueInput)
                                 continue;      // Continues on with code

                              }  // if

                              // Once input is validated, set the 'newDiscount' to equal the inputted discount value
                              newDiscount = discountValue;

                              // Set discount
                              myArray.getCurrent(index).setDiscount(newDiscount);

                              // Outputs new, updated discount price
                              System.out.println("New discount:                     " + dfPercent.format(myArray.getCurrent(index).getDiscount()));

                              break;      // Breaks back to sub-menu

                           // Option 0 - Return to Main Menu
                           case 0:
                              System.out.println("Returning to Main Menu...");      // Outputs return message

                              break;      // Breaks out of sub-menu, back to main menu

                        }  // Existing Customer Sub-switch

                     }  // while

                  }  // if

               } // if
               else
               {
                  System.out.println("\nInvalid customer account number.");    // Outputs 'Invalid Customer Account Number' message (else, validAccRefNo)

               } // else

               break;      // Breaks back to main menu

            // Option 0 - Exit System
            case 0:
               System.out.println("Exiting...");      // Outputs 'Exiting...' message
               System.exit(0);      // Uses 0 to indicate a normal program termination

               break;      // Breaks out of program


         } // Main Menu switch

      } // while


   }  // main

}  // class