namespace MathsTutor
{
    partial class frmAreaQuizForm
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            components = new System.ComponentModel.Container();
            lblAreaQuizTitle = new Label();
            lblAreaQuizDescription = new Label();
            lblQuestion = new Label();
            rdoOption1 = new RadioButton();
            rdoOption2 = new RadioButton();
            rdoOption3 = new RadioButton();
            btnBack = new Button();
            btnNext = new Button();
            btnQuit = new Button();
            lblDivider = new Label();
            lblOptionBox = new Label();
            ttpTooltipsAreaQuiz = new ToolTip(components);
            SuspendLayout();
            // 
            // lblAreaQuizTitle
            // 
            lblAreaQuizTitle.AutoSize = true;
            lblAreaQuizTitle.Font = new Font("Segoe UI", 15.75F, FontStyle.Bold, GraphicsUnit.Point);
            lblAreaQuizTitle.Location = new Point(184, 18);
            lblAreaQuizTitle.Name = "lblAreaQuizTitle";
            lblAreaQuizTitle.Size = new Size(109, 30);
            lblAreaQuizTitle.TabIndex = 6;
            lblAreaQuizTitle.Text = "Area Quiz";
            // 
            // lblAreaQuizDescription
            // 
            lblAreaQuizDescription.AutoSize = true;
            lblAreaQuizDescription.Location = new Point(68, 58);
            lblAreaQuizDescription.Name = "lblAreaQuizDescription";
            lblAreaQuizDescription.Size = new Size(340, 15);
            lblAreaQuizDescription.TabIndex = 7;
            lblAreaQuizDescription.Text = "Answer the questions below about Area to test your knowledge";
            // 
            // lblQuestion
            // 
            lblQuestion.Location = new Point(34, 93);
            lblQuestion.Name = "lblQuestion";
            lblQuestion.Size = new Size(409, 37);
            lblQuestion.TabIndex = 8;
            lblQuestion.Text = "1. Question Text ...";
            lblQuestion.TextAlign = ContentAlignment.MiddleCenter;
            // 
            // rdoOption1
            // 
            rdoOption1.Location = new Point(141, 149);
            rdoOption1.Name = "rdoOption1";
            rdoOption1.Size = new Size(195, 19);
            rdoOption1.TabIndex = 0;
            rdoOption1.Text = "Option 1 ...";
            rdoOption1.TextAlign = ContentAlignment.MiddleCenter;
            rdoOption1.UseVisualStyleBackColor = true;
            rdoOption1.CheckedChanged += rdoOption1_CheckedChanged;
            // 
            // rdoOption2
            // 
            rdoOption2.Location = new Point(141, 199);
            rdoOption2.Name = "rdoOption2";
            rdoOption2.Size = new Size(195, 19);
            rdoOption2.TabIndex = 1;
            rdoOption2.Text = "Option 2 ...";
            rdoOption2.TextAlign = ContentAlignment.MiddleCenter;
            rdoOption2.UseVisualStyleBackColor = true;
            rdoOption2.CheckedChanged += rdoOption2_CheckedChanged;
            // 
            // rdoOption3
            // 
            rdoOption3.Location = new Point(141, 249);
            rdoOption3.Name = "rdoOption3";
            rdoOption3.Size = new Size(195, 19);
            rdoOption3.TabIndex = 2;
            rdoOption3.Text = "Option 3 ...";
            rdoOption3.TextAlign = ContentAlignment.MiddleCenter;
            rdoOption3.UseVisualStyleBackColor = true;
            rdoOption3.CheckedChanged += rdoOption3_CheckedChanged;
            // 
            // btnBack
            // 
            btnBack.Enabled = false;
            btnBack.Font = new Font("Segoe UI", 9.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnBack.Location = new Point(34, 297);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(102, 42);
            btnBack.TabIndex = 3;
            btnBack.Text = "Back";
            ttpTooltipsAreaQuiz.SetToolTip(btnBack, "Previous Question");
            btnBack.UseVisualStyleBackColor = true;
            btnBack.Click += btnBack_Click;
            // 
            // btnNext
            // 
            btnNext.Enabled = false;
            btnNext.Font = new Font("Segoe UI", 9.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnNext.Location = new Point(341, 297);
            btnNext.Name = "btnNext";
            btnNext.Size = new Size(102, 42);
            btnNext.TabIndex = 4;
            btnNext.Text = "Next";
            ttpTooltipsAreaQuiz.SetToolTip(btnNext, "Next Question");
            btnNext.UseVisualStyleBackColor = true;
            btnNext.Click += btnNext_Click;
            // 
            // btnQuit
            // 
            btnQuit.Location = new Point(192, 344);
            btnQuit.Name = "btnQuit";
            btnQuit.Size = new Size(92, 34);
            btnQuit.TabIndex = 5;
            btnQuit.Text = "Quit";
            ttpTooltipsAreaQuiz.SetToolTip(btnQuit, "Leave the quiz");
            btnQuit.UseVisualStyleBackColor = true;
            btnQuit.Click += btnQuit_Click;
            // 
            // lblDivider
            // 
            lblDivider.BorderStyle = BorderStyle.Fixed3D;
            lblDivider.Location = new Point(18, 85);
            lblDivider.Name = "lblDivider";
            lblDivider.Size = new Size(441, 2);
            lblDivider.TabIndex = 9;
            // 
            // lblOptionBox
            // 
            lblOptionBox.BorderStyle = BorderStyle.Fixed3D;
            lblOptionBox.Location = new Point(97, 137);
            lblOptionBox.Name = "lblOptionBox";
            lblOptionBox.Size = new Size(283, 147);
            lblOptionBox.TabIndex = 10;
            // 
            // frmAreaQuizForm
            // 
            AcceptButton = btnNext;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnQuit;
            ClientSize = new Size(476, 390);
            Controls.Add(lblDivider);
            Controls.Add(btnQuit);
            Controls.Add(btnNext);
            Controls.Add(btnBack);
            Controls.Add(rdoOption3);
            Controls.Add(rdoOption2);
            Controls.Add(rdoOption1);
            Controls.Add(lblQuestion);
            Controls.Add(lblAreaQuizDescription);
            Controls.Add(lblAreaQuizTitle);
            Controls.Add(lblOptionBox);
            Name = "frmAreaQuizForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Area Quiz";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label lblAreaQuizTitle;
        private Label lblAreaQuizDescription;
        private Label lblQuestion;
        private RadioButton rdoOption1;
        private RadioButton rdoOption2;
        private RadioButton rdoOption3;
        private Button btnBack;
        private Button btnNext;
        private Button btnQuit;
        private Label lblDivider;
        private Label lblOptionBox;
        private ToolTip ttpTooltipsAreaQuiz;
    }
}