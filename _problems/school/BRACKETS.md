---
category_name: school
problem_code: BRACKETS
problem_name: Brackets
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: null
date_added: 25-10-2014
tags:
    - basics
    - cakewalk
    - cook52
    - kostya_by
editorial_url: 'http://discuss.codechef.com/problems/BRACKETS'
time:
    view_start_date: 1416767794
    submit_start_date: 1416767794
    visible_start_date: 1416767794
    end_date: 1735669800
    current: 1492506766
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK52/mandarin/BRACKETS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK52/russian/BRACKETS.pdf) as well.

 A valid parentheses sequence is a non-empty string where each character is either '**(**' or '**)**', which satisfies the following constraint:

 *You can find a way to repeat erasing adjacent pairs of parentheses* '**()**' *until it becomes empty.*

 For example, '**(())**' and '**()((()()))**' are valid parentheses sequences, but '**)()(**' and '**(()**' are not.

 Mike has a valid parentheses sequence. He really likes everything about his sequence, except the fact that it is quite long. So Mike has recently decided that he will replace his parentheses sequence with a new one in the near future. But not every valid parentheses sequence will satisfy him. To help you understand his requirements we'll introduce the pseudocode of function **F(S)**:

<pre>
	FUNCTION F( S - a valid parentheses sequence )
	BEGIN
		balance = 0
		max_balance = 0
		FOR index FROM 1 TO LENGTH(S)
		BEGIN
			if S[index] == '(' then balance = balance + 1
			if S[index] == ')' then balance = balance - 1
			max_balance = max( max_balance, balance )
		END
		RETURN max_balance
	END
</pre>
 In other words, **F(S)** is equal to the maximal balance over all prefixes of **S**.

 Let's denote **A** as Mike's current parentheses sequence, and **B** as a candidate for a new one. Mike is willing to replace **A** with **B** if **F(A)** is equal to **F(B)**. He would also like to choose **B** with the minimal possible length amongst ones satisfying the previous condition. If there are several such strings with the minimal possible length, then Mike will choose the least one lexicographically, considering '**(**' to be less than '**)**'.

 Help Mike!

### Input

 The first line of the input contains one integer **T** denoting the number of testcases to process.

 The only line of each testcase contains one string **A** denoting Mike's parentheses sequence. It is guaranteed that **A** only consists of the characters **'('** and **')'**. It is also guaranteed that **A** is a valid parentheses sequence.

### Output

 The output should contain exactly **T** lines, one line per each testcase in the order of their appearance. The only line of each testcase should contain one string **B** denoting the valid parentheses sequence that should be chosen by Mike to replace **A**.

### Constraints

1 ≤ **T** ≤ 5;

1 ≤ **|A|** ≤ 100000(105).

### Example

<pre><b>Input:</b>
1
()((()()))

<b>Output:</b>
((()))

</pre>