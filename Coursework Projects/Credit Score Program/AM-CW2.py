# AndrewMcCormickCMP101CW2Solution.py
# Coursework 2
# CreditScore Program - A program which implements the agencies credit score algorithm
# Andrew McCormick



# Defines main function which calls all the individual functions
def main():
    welcome()               # Calls function used for welcome text opening
    getCreditCards()        # Calls function used for obtaining the amount of credit cards
    getCCBalanceLimit()     # Calls function used for obtaining the credit card balance(s) and limit(s) based on the previous function
    getAnswers()            # Calls function used for asking and storing answers to the 'Yes or No' questions
    getCreditScore()        # Calls function used for calculating the user's credit score rating
    getSummary()            # Calls function used for displaying the final summary of everything



# Defines function used to create a welcoming display screen for the user
def welcome():

    print("Thank you for using CreditScore")        # Output - Opening title
    print("===============================")        # Output - Bar to break up the welcome from the following text

    

# Defines function used for obtaining the amount of credit cards
def getCreditCards():
    
    global noOfCards            # Converts the number of cards variable into a global variable for use in other functions
    global ccTotalBalance       # Converts the total credit card balance variable into a global variable to allow it to be used in other functions
    global ccTotalLimit         # Converts the total credit card limit into a global variable to allow it to be used in other functions

    # Declares variable (isInteger) to False before starting the While Loop
    isInteger = False

    # Sets error message to specified text, relevant to this section - Invalid number of cards
    errorMessage = "ERROR: Invalid number of cards – please re-enter"

    # Start of While Loop
    while not isInteger:        # While not a valid integer > do the following...
        try:        # Try statement for testing this section for errors within the loop
            noOfCards = int(input("How many credit cards (0-3)? "))     # Input - Prompts user for the amount of credit cards they have
            if noOfCards > 0 and noOfCards <= 3:        # If Statement - If the number of cards is greater than 0 and less than or equal to 3 > do the following...
                isInteger = True        # Sets variable (isInteger) to True, ending the While Loop
            elif noOfCards == 0:        # If Statement - If the number of cards is equal to 0 > do the following...
                ccTotalBalance = 0      # Sets total credit card balance variable to 0
                ccTotalLimit = 0        # Sets total credit card limit variable to 0
                isInteger = True        # Sets variable (isInteger) to True, ending the While Loop
            else:
                print(errorMessage)     # Else > Output error message variable string
        except:
            print(errorMessage)         # Except > Output error message variable string



# Defines function used for obtaining the credit card balance(s) and limit(s) based on the previous function
def getCCBalanceLimit():
    
    global noOfCards                                # Converts the number of cards variable into a global variable for use in other functions
    global ccTotalBalance                           # Converts the total balance variable into a global variable to allow it to be used in other functions
    global ccBalance1, ccBalance2, ccBalance3       # Converts all individual credit card balance variables into global variables, allowing them to be used in other functions
    global ccLimit1, ccLimit2, ccLimit3             # Converts all individual credit card limit variables into global variables, allowing them to be used in other functions
    global ccTotalLimit                             # Converts the total credit card limit variable to global for use in other functions

    # Sets error message to specified text, relevant to this section - Invalid amount
    errorMessage = "ERROR: Invalid amount - please re-enter"
    


##################################
# If statement for 1 Credit Card #
##################################

    # If Statement - If the number of cards is equal to 1 (1 Credit Card) > do the following...
    if noOfCards == 1:

        # Declares variables (isInteger and isValid) to False before starting the While Loop
        isDecimal = False
        isValid = False


        # Start of While Loop
        while not isDecimal:        # While not a valid decimal number > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccBalance1 = float(input("What is the balance of card 1 (0-10,000)? "))     # Input - Prompts user for the credit card balance for card 1

                # If Statement - If the credit card balance for card 1 is greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccBalance1 >= 0 and ccBalance1 <= 10000:     
                    isDecimal = True        # Sets variable (isDecimal) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string
                

        # Start of While Loop
        while not isValid:      # While not valid > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccLimit1 = float(input("What is the credit limit of card 1 (0-10,000)? "))      # Input - Prompts user for the credit card limit for card 1

                # If statement - If the credit card limit for card 1 is greater than or equal to the balance for card 1 AND greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccLimit1 >= ccBalance1 and ccLimit1 >= 0 and ccLimit1 <= 10000:
                    isValid = True          # Sets variable (isValid) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string


        ccTotalBalance = ccBalance1     # Sets the total credit card balance to equal whatever the balance of card 1 is
        ccTotalLimit = ccLimit1         # Sets the total credit card limit to equal whatever the limit of card 1 is


###################################
# If statement for 2 Credit Cards #
###################################

    # If Statement - If the number of cards is equal to 2 (2 Credit Cards) > do the following...
    if noOfCards == 2:

        # Declares variables (isInteger and isValid) to False before starting the While Loop
        isDecimal = False
        isValid = False

        # Start of While Loop
        while not isDecimal:        # While not a valid decimal number > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccBalance1 = float(input("What is the balance of card 1 (0-10,000)? "))     # Input - Prompts user for the credit card balance for card 1

                # If Statement - If the credit card balance for card 1 is greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccBalance1 >= 0 and ccBalance1 <= 10000:
                    isDecimal = True        # Sets variable (isDecimal) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string


        # Start of While Loop
        while not isValid:      # While not valid > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccLimit1 = float(input("What is the credit limit of card 1 (0-10,000)? "))      # Input - Prompts user for the credit card limit for card 1

                # If statement - If the credit card limit for card 1 is greater than or equal to the balance for card 1 AND greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccLimit1 >= ccBalance1 and ccLimit1 >= 0 and ccLimit1 <= 10000:
                    isValid = True          # Sets variable (isValid) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string



        # Resets variables (isDecimal and isValid) back to False before starting the While Loop for the next credit card
        isDecimal = False
        isValid = False

        # Start of While Loop
        while not isDecimal:        # While not a valid decimal number > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccBalance2 = float(input("What is the balance of card 2 (0-10,000)? "))     # Input - Prompts user for the credit card balance for card 2

                # If Statement - If the credit card balance for card 2 is greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccBalance2 >= 0 and ccBalance2 <= 10000:
                    isDecimal = True        # Sets variable (isDecimal) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string
                


        # Start of While Loop
        while not isValid:      # While not valid > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccLimit2 = float(input("What is the credit limit of card 2 (0-10,000)? "))      # Input - Prompts user for the credit card limit for card 2

                # If statement - If the credit card limit for card 2 is greater than or equal to the balance for card 2 AND greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccLimit2 >= ccBalance2 and ccLimit2 >= 0 and ccLimit2 <= 10000:
                    isValid = True          # Sets variable (isValid) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string


        ccTotalBalance = ccBalance1 + ccBalance2        # Sets the total credit card balance to equal the total of credit card balance 1 and balance 2
        ccTotalLimit = ccLimit1 + ccLimit2              # Sets the total credit card balance to equal the total of credit card limit 1 and limit 2


###################################
# If statement for 3 Credit Cards #
###################################

    # If Statement - If the number of cards is equal to 3 (3 Credit Cards) > do the following...
    if noOfCards == 3:

        # Declares variables (isInteger and isValid) to False before starting the While Loop
        isDecimal = False
        isValid = False

        # Start of While Loop
        while not isDecimal:        # While not a valid decimal number > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccBalance1 = float(input("What is the balance of card 1 (0-10,000)? "))     # Input - Prompts user for the credit card balance for card 1

                # If Statement - If the credit card balance for card 1 is greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccBalance1 >= 0 and ccBalance1 <= 10000:
                    isDecimal = True        # Sets variable (isDecimal) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string


        # Start of While Loop
        while not isValid:       # While not valid > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccLimit1 = float(input("What is the credit limit of card 1 (0-10,000)? "))      # Input - Prompts user for the credit card limit for card 1

                # If statement - If the credit card limit for card 1 is greater than or equal to the balance for card 1 AND greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccLimit1 >= ccBalance1 and ccLimit1 >= 0 and ccLimit1 <= 10000:
                    isValid = True          # Sets variable (isValid) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Else > Output error message variable string


        # Resets variables (isDecimal and isValid) back to False before starting the While Loop for the next credit card
        isDecimal = False
        isValid = False

        # Start of While Loop
        while not isDecimal:        # While not a valid decimal number > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccBalance2 = float(input("What is the balance of card 2 (0-10,000)? "))     # Input - Prompts user for the credit card balance for card 2

                # If Statement - If the credit card balance for card 2 is greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccBalance2 >= 0 and ccBalance2 <= 10000:
                    isDecimal = True        # Sets variable (isDecimal) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string


        # Start of While Loop
        while not isValid:       # While not valid > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccLimit2 = float(input("What is the credit limit of card 2 (0-10,000)? "))      # Input - Prompts user for the credit card limit for card 2

                # If statement - If the credit card limit for card 2 is greater than or equal to the balance for card 2 AND greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccLimit2 >= ccBalance2 and ccLimit2 >= 0 and ccLimit2 <= 10000:
                    isValid = True          # Sets variable (isValid) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string


        # Resets variables (isDecimal and isValid) back to False before starting the While Loop for the next credit card
        isDecimal = False
        isValid = False

        # Start of While Loop
        while not isDecimal:        # While not a valid decimal number > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccBalance3 = float(input("What is the balance of card 3 (0-10,000)? "))     # Input - Prompts user for the credit card balance for card 3

                # If Statement - If the credit card balance for card 3 is greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccBalance3 >= 0 and ccBalance3 <= 10000:
                    isDecimal = True        # Sets variable (isDecimal) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string


        # Start of While Loop
        while not isValid:       # While not valid > do the following...
            try:        # Try statement for testing this section for errors within the loop
                ccLimit3 = float(input("What is the credit limit of card 3 (0-10,000)? "))      # Input - Prompts user for the credit card limit for card 3

                # If statement - If the credit card limit for card 3 is greater than or equal to the balance for card 3 AND greater than or equal to 0 AND less than or equal to 10000 > do the following...
                if ccLimit3 >= ccBalance3 and ccLimit3 >= 0 and ccLimit3 <= 10000:
                    isValid = True          # Sets variable (isValid) to True, ending the While Loop
                else:
                    print(errorMessage)     # Else > Output error message variable string
            except:
                print(errorMessage)         # Except > Output error message variable string


        ccTotalBalance = ccBalance1 + ccBalance2 + ccBalance3       # Sets the total credit card balance to equal the total of credit card balance 1, balance 2 and balance 3
        ccTotalLimit = ccLimit1 + ccLimit2 + ccLimit3               # Sets the total credit card balance to equal the total of credit card limit 1, limit 2 and limit 3



# Defines function used for asking and storing answers to the 'Yes or No' questions
def getAnswers():

    global accountOpened        # Converts the 'accountOpened' variable into a global variable for use in other functions
    global electoralRoll        # Converts the 'electoralRoll' variable into a global variable for use in other functions
    global missingPayments      # Converts the 'missingPayments' variable into a global variable for use in other functions
    global CCJs                 # Converts the 'CCJs' variable into a global variable for use in other functions

    # Sets error message to specified text, relevant to this section - Invalid answer
    errorMessage = "ERROR: Invalid answer - please re-enter"


# Question 1 - Has a new account been opened in the last 6 months?

    # Declares variable (validAnswer) to False before starting the While Loop
    validAnswer = False

    # Start of While Loop
    while not validAnswer:      # While not a valid answer > do the following...
        try:        # Try statement for testing this section for errors within the loop
            accountOpened = input("Has a new account been opened in the last 6 months (Y or N)? ")      # Input - Prompts user asking them to answer 'y' or 'n' (Yes or No) to the question asked
            
            # If statement - If the answer is 'y' > do the following...
            if accountOpened.lower() == "y":        # Uses .lower() to allow either lowercase or uppercase 'y' or 'n' to be accepted
                accountOpened = "Yes"       # Sets variables (accountOpened) to a string "Yes"
                validAnswer = True          # Sets variable (validAnswer) to True, ending the While Loop

            # If statement - If the answer is 'n' > do the following...
            elif accountOpened.lower() == "n":      # Uses .lower() to allow either lowercase or uppercase 'y' or 'n' to be accepted
                accountOpened = "No"        # Sets variables (accountOpened) to a string "No"
                validAnswer = True          # Sets variable (validAnswer) to True, ending the While Loop
            else:
                print(errorMessage)         # Else > Output error message variable string
        except:
            print(errorMessage)             # Except > Output error message variable string


# Question 2 - Is there a registration for the electoral roll?

    # Declares variable (validAnswer) to False before starting the While Loop
    validAnswer = False

    # Start of While Loop
    while not validAnswer:      # While not a valid answer > do the following...
        try:        # Try statement for testing this section for errors within the loop
            electoralRoll = input("Is there a registration for the electoral roll (Y or N)? ")      # Input - Prompts user asking them to answer 'y' or 'n' (Yes or No) to the question asked
            
            # If statement - If the answer is 'y' > do the following...
            if electoralRoll.lower() == "y":        # Uses .lower() to allow either lowercase or uppercase 'y' or 'n' to be accepted
                electoralRoll = "Yes"       # Sets variables (electoralRoll) to a string "Yes"
                validAnswer = True          # Sets variable (validAnswer) to True, ending the While Loop
            
            # If statement - If the answer is 'n' > do the following...
            elif electoralRoll.lower() == "n":      # Uses .lower() to allow either lowercase or uppercase 'y' or 'n' to be accepted
                electoralRoll = "No"        # Sets variables (electoralRoll) to a string "No"
                validAnswer = True          # Sets variable (validAnswer) to True, ending the While Loop
            else:
                print(errorMessage)         # Else > Output error message variable string
        except:
            print(errorMessage)             # Except > Output error message variable string
            

# Question 3 - Are there records of missing payments?

    # Declares variable (validAnswer) to False before starting the While Loop
    validAnswer = False

    # Start of While Loop
    while not validAnswer:      # While not a valid answer > do the following...
        try:        # Try statement for testing this section for errors within the loop
            missingPayments = input("Are there records of missing payments (Y or N)? ")     # Input - Prompts user asking them to answer 'y' or 'n' (Yes or No) to the question asked
            
            # If statement - If the answer is 'y' > do the following...
            if missingPayments.lower() == "y":      # Uses .lower() to allow either lowercase or uppercase 'y' or 'n' to be accepted
                missingPayments = "Yes"     # Sets variables (missingPayments) to a string "Yes"
                validAnswer = True          # Sets variable (validAnswer) to True, ending the While Loop
            
            # If statement - If the answer is 'n' > do the following...
            elif missingPayments.lower() == "n":    # Uses .lower() to allow either lowercase or uppercase 'y' or 'n' to be accepted
                missingPayments = "No"      # Sets variables (missingPayments) to a string "No"
                validAnswer = True          # Sets variable (validAnswer) to True, ending the While Loop
            else:
                print(errorMessage)         # Else > Output error message variable string
        except:
            print(errorMessage)             # Except > Output error message variable string


# Question 4 - Are there any CCJs?

    # Declares variable (validAnswer) to False before starting the While Loop
    validAnswer = False

    # Start of While Loop
    while not validAnswer:      # While not a valid answer > do the following...
        try:        # Try statement for testing this section for errors within the loop
            CCJs = input("Are there any CCJs (Y or N)? ")       # Input - Prompts user asking them to answer 'y' or 'n' (Yes or No) to the question asked
            
            # If statement - If the answer is 'y' > do the following...
            if CCJs.lower() == "y":         # Uses .lower() to allow either lowercase or uppercase 'y' or 'n' to be accepted
                CCJs = "Yes"                # Sets variables (CCJs) to a string "Yes"
                validAnswer = True          # Sets variable (validAnswer) to True, ending the While Loop
            
            # If statement - If the answer is 'y' > do the following...
            elif CCJs.lower() == "n":       # Uses .lower() to allow either lowercase or uppercase 'y' or 'n' to be accepted
                CCJs = "No"                 # Sets variables (CCJs) to a string "No"
                validAnswer = True          # Sets variable (validAnswer) to True, ending the While Loop
            else:
                print(errorMessage)         # Else > Output error message variable string
        except:
            print(errorMessage)             # Except > Output error message variable string



# Credit Score Calculations

# Defines functions used for calculating the user's credit score rating
def getCreditScore():

    global basePoints           # Converts the base points variable into a global variable for use in other functions
    global totalScore           # Converts the total score variable into a global variable for use in other functions

    basePoints = 400            # Sets variable (basePoints) to equal 400 - This is because everyone starts with 400 points before calculations are executed
    totalScore = basePoints     # Sets variable (totalScore) to equal the same as the 'basePoints' variable

    global ccTotalLimit         # Converts the total credit card limit variable to global for use in other functions
    global ccTotalBalance       # Converts the total balance variable into a global variable to allow it to be used in other functions
    global accountOpened        # Converts the 'accountOpened' variable into a global variable for use in other functions
    global electoralRoll        # Converts the 'electoralRoll' variable into a global variable for use in other functions
    global missingPayments      # Converts the 'missingPayments' variable into a global variable for use in other functions
    global CCJs                 # Converts the 'CCJs' variable into a global variable for use in other functions
    global scoreIndicator       # Converts the 'scoreIndicator' variable into a global variable for use in other functions



# If Statement Block
#
# If Statements for calculating total credit score rating

    if ccTotalLimit >= 5000:                    # If the total credit card limit is greater than or equal to 5000 (£5000) > do the following...
        totalScore = totalScore + 50            # Total Score + 50 (Plus 50 points)
    if ccTotalLimit <= 250:                     # If the total credit card limit is less than or equal to 250 (£250) >
        totalScore = totalScore - 20            # Total Score - 20 (Minus 20 points)
    if ccTotalBalance <= 50:                    # If the total credit card balance is less than or equal to 50 (£50) >
        totalScore = totalScore + 60            # Total Score + 60 (Plus 60 points)
    if ccTotalBalance >= 15000:                 # If the total credit card balance is greater than or equal to 15000 (£15,000) >
        totalScore = totalScore - 30            # Total Score - 30 (Minus 30 points)
    if ccTotalBalance <= ccTotalLimit * 0.3:    # If the total credit card balance is less than or equal to 30% of the total credit card limit >
        totalScore = totalScore + 90            # Total Score + 90 (Plus 90 points)
    if ccTotalBalance >= ccTotalLimit * 0.9:    # If the total credit card balance is greater than or equal to 90% of the total credit card limit >
        totalScore = totalScore - 50            # Total Score - 50 (Minus 50 points)
    if accountOpened == "Yes":                  # If the answer is "Yes" >
        totalScore = totalScore - 30            # Total Score - 30 (Minus 30 points)
    if accountOpened == "No":                   # If the answer is "No" >
        totalScore = totalScore + 50            # Total Score + 50 (Plus 50 points)
    if electoralRoll == "Yes":                  # If the answer is "Yes" >
        totalScore = totalScore + 50            # Total Score + 50 (Plus 50 points)
    if electoralRoll == "No":                   # If the answer is "No" >
        totalScore = totalScore - 20            # Total Score - 20 (Minus 20 points)
    if missingPayments == "Yes":                # If the answer is "Yes" >
        totalScore = totalScore - 100           # Total Score - 100 (Minus 100 points)
    if missingPayments == "No":                 # If the answer is "No" >
        totalScore = totalScore + 125           # Total Score + 125 (Plus 125 points)
    if CCJs == "Yes":                           # If the answer is "Yes" >
        totalScore = totalScore - 150           # Total Score - 150 (Minus 150 points)
    if CCJs == "No":                            # If the answer is "No" >
        totalScore = totalScore + 175           # Total Score + 175 (Plus 175 points)
    
# End of If Statement Block



# If Statement Block
#
# Credit Score Indicator for calculating total credit score rating

    if totalScore >= 0 and totalScore < 200:        # If the total score is greater than or equal to 0 AND less than 200 (between 0 and 199)> do the following...
        scoreIndicator = "VERY POOR"                # Score Indicator is set to "VERY POOR"
    elif totalScore >= 200 and totalScore < 400:    # If the total score is greater than or equal to 200 AND less than 400 (between 200 and 399) >
        scoreIndicator = "POOR"                     # Score Indicator is set to "POOR"
    elif totalScore >= 400 and totalScore < 600:    # If the total score is greater than or equal to 400 AND less than 600 (between 400 and 599) >
        scoreIndicator = "FAIR"                     # Score Indicator is set to "FAIR"
    elif totalScore >= 600 and totalScore < 800:    # If the total score is greater than or equal to 600 AND less than 800 (between 600 and 799) >
        scoreIndicator = "GOOD"                     # Score Indicator is set to "GOOD"
    elif totalScore >= 800:                         # If the total score is greater than or equal to 800 (800 or higher) >
        scoreIndicator = "EXCELLENT"                # Score Indicator is set to "EXCELLENT"

# End of If Statement Block


        
# Defines function used for displaying the final summary of everything
def getSummary():
    
    global noOfCards                                # Converts the number of cards variable into a global variable for use in other functions
    global ccTotalBalance                           # Converts the total credit card balance variable into a global variable to allow it to be used in other functions
    global ccBalance1, ccBalance2, ccBalance3       # Converts all individual credit card balance variables into global variables, allowing them to be used in other functions
    global ccLimit1, ccLimit2, ccLimit3             # Converts all individual credit card limit variables into global variables, allowing them to be used in other functions
    global ccTotalLimit                             # Converts the total credit card limit into a global variable to allow it to be used in other functions


    print()     # Puts a space between lines

    print("Summary")        # Output - Summary text
    print("=======")        # Bar to break up the title from the following text
    print("Number of cards: " + str(noOfCards))     # Output - String of text for the amount of cards

    print()     # Puts a space between lines


    print("Card         Balance         Limit")     # Output - Table headings
    print("==================================")     # Bar to break up the headings from the following text

    # If Statement - If there is 1 card > do the following...
    if noOfCards == 1:

        # Output - Card numbers followed by the total credit card balance followed by the total credit card limit
        print("1            " + "£" "{:.2f}".format(ccBalance1) + "         " + "£" "{:.2f}".format(ccLimit1))

    # If Statement - If there are 2 cards > do the following...
    elif noOfCards == 2:

        # Output - Card numbers followed by the total credit card balance followed by the total credit card limit
        print("1            " + "£" "{:.2f}".format(ccBalance1) + "         " + "£" "{:.2f}".format(ccLimit1))
        print("2            " + "£" "{:.2f}".format(ccBalance2) + "         " + "£" "{:.2f}".format(ccLimit2))

    # If Statement - If there are 3 cards > do the following...
    elif noOfCards == 3:

        # Output - Card numbers followed by the total credit card balance followed by the total credit card limit
        print("1            " + "£" "{:.2f}".format(ccBalance1) + "         " + "£" "{:.2f}".format(ccLimit1))
        print("2            " + "£" "{:.2f}".format(ccBalance2) + "         " + "£" "{:.2f}".format(ccLimit2))
        print("3            " + "£" "{:.2f}".format(ccBalance3) + "         " + "£" "{:.2f}".format(ccLimit3))

    print("==================================")     # Bar to break up the title from the following text

    # Output - "Total" text followed by the total credit card balance followed by the total credit card limit
    print("Total        " + "£" "{:.2f}".format(ccTotalBalance) + "        " + "£" "{:.2f}".format(ccTotalLimit))

    
    print()     # Puts a space between lines

    print("New account in last 6 mths?  " + str(accountOpened))     # Output - String of text for the answer to the first question
    print("Electoral roll?              " + str(electoralRoll))     # Output - String of text for the answer to the second question
    print("Missing payments?            " + str(missingPayments))   # Output - String of text for the answer to the third question
    print("CCJs?                        " + str(CCJs))              # Output - String of text for the answer to the fourth question

    print()     # Puts a space between lines

    print("Credit score rating")                    # Output - Heading for credit score rating
    print("===================")                    # Bar to break up the heading from the following text
    print("Score:       " + str(totalScore))        # Output - String of text followed by the calculated Total Score
    print("Indicator:   " + str(scoreIndicator))    # Output - String of text followed by the calculated Score Indicator text

    print()     # Puts a space between lines

# Calls the main function which, in turn, starts all the functions underneath it
main()

# End of program