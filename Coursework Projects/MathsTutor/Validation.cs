using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

/* CW2 | Validation.cs - Class for defining methods to validate for different inputs or lack of inputs (IsPresent, IsDouble, IsDecimal, IsWithinRange)
 * AUTHOR:          Andrew McCormick
 * DATE CREATED:    30/11/23
 */

namespace MathsTutor
{
    public static class Validation
    {
        // Validation Methods

        // Method to validate if any character is present
        public static bool IsPresent(TextBox textBox, string fieldName)
        {
            if (textBox.Text == "")
            {
                MessageBox.Show("The " + fieldName + " is a required field.", "Invalid", MessageBoxButtons.OK, MessageBoxIcon.Error);
                textBox.Focus();
                return false;
            }
            return true;
        }// IsPresent

        // Method to validate if there is a double value
        public static bool IsDouble(TextBox textBox, string fieldName)
        {
            try
            {
                double number = Convert.ToDouble(textBox.Text);
                return true;
            }
            catch
            {
                MessageBox.Show("The " + fieldName + " must be a whole or decimal number.", "Invalid", MessageBoxButtons.OK, MessageBoxIcon.Error);
                textBox.Focus();
                return false;
            }
        }// IsDouble

        // Method to validate if there is a decimal value
        public static bool IsDecimal(TextBox textBox, string fieldName)
        {
            try
            {
                decimal number = Convert.ToDecimal(textBox.Text);
                return true;
            }
            catch
            {
                MessageBox.Show("The " + fieldName + " must be a decimal number.", "Invalid", MessageBoxButtons.OK, MessageBoxIcon.Error);
                textBox.Focus();
                return false;
            }
        }// IsDecimal

        // Method to validate if the value is within range of 2 defined numbers
        public static bool IsWithinRange(TextBox textBox, string fieldName, double min, double max)
        {
            double number = Convert.ToDouble(textBox.Text);

            if (number < min || number > max)
            {
                MessageBox.Show("The " + fieldName + " must be between " + min + " and " + max + ".", "Invalid", MessageBoxButtons.OK, MessageBoxIcon.Error);
                textBox.Clear();
                textBox.Focus();
                return false;
            }
            return true;
        }// IsWithinRange
    }
}
