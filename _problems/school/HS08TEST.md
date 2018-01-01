---
category_name: school
problem_code: HS08TEST
problem_name: ATM
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - FORT
    - GO
    - HASK
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
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 1-12-2008
tags:
    - admin
    - cakewalk
    - conditions
    - datatypes
    - input
editorial_url: 'http://discuss.codechef.com/problems/HS08TEST'
time:
    view_start_date: 1240995052
    submit_start_date: 1240995052
    visible_start_date: 1240995052
    end_date: 1735669800
    current: 1492507648
layout: problem
---
All submissions for this problem are available.Pooja would like to withdraw X $US from an ATM. The cash machine will only accept the transaction if X is a multiple of 5, and Pooja's account balance has enough cash to perform the withdrawal transaction (including bank charges). For each successful withdrawal the bank charges 0.50 $US. Calculate Pooja's account balance after an attempted transaction.

### Input

 Positive integer 0 X Nonnegative number 0Y Output

Output the account balance after the attempted transaction, given as a number with two digits of precision. If there is not enough money in the account to complete the transaction, output the current bank balance.

### Example - Successful Transaction

<pre>
<b>Input:</b>
30 120.00

<b>Output:</b>
89.50

</pre>### Example - Incorrect Withdrawal Amount (not multiple of 5)
<pre>
<b>Input:</b>
42 120.00

<b>Output:</b>
120.00

</pre>### Example - Insufficient Funds
<pre>
<b>Input:</b>
300 120.00

<b>Output:</b>
120.00

</pre>