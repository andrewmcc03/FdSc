using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Formats.Asn1.AsnWriter;
using static System.Windows.Forms.VisualStyles.VisualStyleElement.Button;

namespace MathsTutor
{
    public partial class frmAreaQuizForm : Form
    {
        private bool radioButtonSelected = false;   // Variable for checking if a radio button is selected
        private int currentQuestionIndex = 0;   // Variable for keeping track of the current question
        int score = 0;  // Initalises score variable to 0

        // Array list for storing the Area Quiz questions
        private string[] questions =
        {
            "Which of the following formulas is used to find the area of a triangle?",
            "The area of a rectangle is 20 square centimetres and the length is 5 centimetres. What is its width?",
            "Which of the following shapes has an area that can be calculated using the formula \"A = πr²\"?"
        };

        // Array list for storing the Area Quiz question options
        private string[][] options =
        {
            new string[] {"A = Base²", "A = π × Base × Height", "A = ½ × Base × Height"},
            new string[] {"4 centimetres", "5 centimetres", "10 centimetres"},
            new string[] {"Triangle", "Circle", "Square"}
        };

        private int[] correctAnswers = { 2, 0, 1 }; // Index of the correct option for each question (0 = Option 1, 1 = Option 2, 2 = Option 3 etc.)

        private bool[] userAnswers = new bool[3]; // To store user's answers for each question

        /// Start of methods

        // Method to display the current question text and its options
        private void DisplayCurrentQuestion()
        {
            // Sets question text based on which question the user is on
            lblQuestion.Text = $"{currentQuestionIndex + 1}. {questions[currentQuestionIndex]}";

            // Sets option text based on which question the user is on
            rdoOption1.Text = options[currentQuestionIndex][0];
            rdoOption2.Text = options[currentQuestionIndex][1];
            rdoOption3.Text = options[currentQuestionIndex][2];

            // Clear previous selection
            rdoOption1.Checked = false;
            rdoOption2.Checked = false;
            rdoOption3.Checked = false;
        }

        // Method to change if the "Next" button should be enabled or disabled depending on which question the user is on
        private void UpdateNextButtonEnabledState()
        {
            if (radioButtonSelected)
            {
                btnNext.Enabled = true;
            }
            else
            {
                btnNext.Enabled = false;
            }
        }

        // Method for handling the FormClosing event
        private void frmAreaQuizForm_FormClosing(object sender, FormClosingEventArgs e)
        {
            // Prevents closing the form directly - handles it in the event handler
            e.Cancel = true;
        }

        // Method for logging the user's answers as they go through the quiz (if user goes back to a previous question, program should log new answer)
        private void SaveUserAnswer()
        {
            if (rdoOption1.Checked)
                userAnswers[currentQuestionIndex] = (correctAnswers[currentQuestionIndex] == 0);
            else if (rdoOption2.Checked)
                userAnswers[currentQuestionIndex] = (correctAnswers[currentQuestionIndex] == 1);
            else if (rdoOption3.Checked)
                userAnswers[currentQuestionIndex] = (correctAnswers[currentQuestionIndex] == 2);
        }

        // Method for calculating the final score once the user has completed the quiz
        private int CalculateScore()
        {
            // For loop to iterate over each question
            for (int i = 0; i < questions.Length; i++)
            {
                // Check if the user's answer (for each question) matches the correct answer indicated in the 'correctAnswers' list
                if (userAnswers[i])
                {
                    score++;    // Increments score by 1 each time
                }
            }
            return score;   // Returns the final score
        }

        // Method to output the final score of the Area Quiz
        private void DisplayFinalScore()
        {
            score = CalculateScore();   // Calls method to calculate score and sets it as the score

            // Setting up message box for final score output
            MessageBoxButtons buttons = MessageBoxButtons.OK;
            MessageBoxIcon icon = MessageBoxIcon.None;
            string title = "Area Quiz Results";
            string message = $"Your final score is: {score} out of {questions.Length}\n\n\n";

            // For loop to iterate through each question and display its result (correct or incorrect) in the message
            for (int i = 0; i < questions.Length; i++)
            {
                string result = userAnswers[i] ? "✔" : "✖"; // Alternatively put "Correct" : "Incorrect"
                message += $"Question {i + 1}: {result}\n\n";   // Outputs each question, number by number, with a tick or X to mark if it is correct or incorrect
            }

            MessageBox.Show(message, title, buttons, icon); // Displays pre-defined message box to show the user their final score and which questions were correct/incorrect

            this.Close();   // Returns to Area Menu
        }

        /// End of methods

        public frmAreaQuizForm()
        {
            InitializeComponent();
            DisplayCurrentQuestion();   // Displays the current question for the Area Quiz from the array list
            this.Select();  // Removes initial focus
        }

        private void rdoOption1_CheckedChanged(object sender, EventArgs e)
        {
            if (rdoOption1.Checked)
            {
                radioButtonSelected = true;
            }
            else
            {
                radioButtonSelected = false;
            }

            // Calls method to update the "Next" button's enabled state based on the flag
            UpdateNextButtonEnabledState();
        }

        private void rdoOption2_CheckedChanged(object sender, EventArgs e)
        {
            if (rdoOption2.Checked)
            {
                radioButtonSelected = true;
            }
            else
            {
                radioButtonSelected = false;
            }

            // Calls method to update the "Next" button's enabled state based on the flag
            UpdateNextButtonEnabledState();
        }

        private void rdoOption3_CheckedChanged(object sender, EventArgs e)
        {
            if (rdoOption3.Checked)
            {
                radioButtonSelected = true;
            }
            else
            {
                radioButtonSelected = false;
            }

            // Calls method to update the "Next" button's enabled state based on the flag
            UpdateNextButtonEnabledState();
        }

        private void btnNext_Click(object sender, EventArgs e)
        {
            // Save user's answer
            SaveUserAnswer();

            // Move to the next question
            currentQuestionIndex++;

            // Check if it's the last question
            if (currentQuestionIndex < questions.Length)
            {
                DisplayCurrentQuestion();
            }
            else
            {
                // Display the final score and details when all questions are answered
                DisplayFinalScore();
            }

            // Sets the "Next" button text to "Finish" and its tooltip to "Submit Quiz" when you're on the last (3rd) question.
            if (currentQuestionIndex == questions.Length - 1)
            {
                btnNext.Text = "Finish";
                ttpTooltipsAreaQuiz.SetToolTip(btnNext, "Submit Quiz");
            }

            // Enables the "Back" button when moving to the 2nd question or later
            if (currentQuestionIndex > 0)
            {
                btnBack.Enabled = true;
            }
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            // Move to the previous question
            currentQuestionIndex--;

            // Check if it's the first question
            if (currentQuestionIndex >= 0)
            {
                DisplayCurrentQuestion();
            }
            else
            {
                // Do nothing or handle the case when the user tries to go back from the first question
                currentQuestionIndex = 0;
            }

            // Sets the "Next" button text back to "Next" and its tooltip back to "Next Question" when moving back to previous questions
            if (currentQuestionIndex < questions.Length - 1)
            {
                btnNext.Text = "Next";
                ttpTooltipsAreaQuiz.SetToolTip(btnNext, "Next Question");
            }

            // Disables the "Back" button if you're on the first question
            if (currentQuestionIndex == 0)
            {
                btnBack.Enabled = false;
            }
        }

        private void btnQuit_Click(object sender, EventArgs e)
        {
            this.Close();   // Returns to Area Menu
        }
    }
}
