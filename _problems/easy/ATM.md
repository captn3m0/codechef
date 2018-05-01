---
category_name: easy
problem_code: ATM
problem_name: ATM
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: emptyskull
problem_tester: null
date_added: 19-10-2013
tags:
    - emptyskull
time:
    view_start_date: 1521019380
    submit_start_date: 1521019380
    visible_start_date: 1521019380
    end_date: 1735669800
    current: 1525198933
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Problem description.

Pooja would like to withdraw X $US from an ATM. The cash machine will only accept the transaction if X is a multiple of 5, and Pooja's account balance has enough cash to perform the withdrawal transaction (including bank charges). For each successful withdrawal the bank charges 0.50 $US. Calculate Pooja's account balance after an attempted transaction.

### Input

Input description.

Positive integer 0 Nonnegative number 0

### Output

Output the account balance after the attempted transaction, given as a number with two digits of precision. If there is not enough money in the account to complete the transaction, output the current bank balance.

### Example - Successful Transaction

<pre><b>Input:</b>
<b>30 120.00</b>
<br></br>
<b>Output:</b>
<b>89.50</b>
</pre>### Example - Incorrect Withdrawal Amount (not multiple of 5)

<pre><b>Input:</b>
<b>42 120.00</b>
<br></br>
<b>Output:</b>
<b>120.00</b>
</pre>### Example - Insufficient Funds

<pre><b>Input:</b>
<b>300 120.00</b>
<br></br>
<b>Output:</b>
<b>120.00</b>
</pre>