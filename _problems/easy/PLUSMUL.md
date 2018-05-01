---
category_name: easy
problem_code: PLUSMUL
problem_name: 'Add or Multiply'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: deadwing97
problem_tester: null
date_added: 1-06-2017
tags:
    - deadwing97
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497284096
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/PLUSMUL.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/PLUSMUL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/PLUSMUL.pdf) as well.

Hussain was feeling very bored in his physics class. Just hearing theorems and formulas about mechanics and electronics makes him utterly sick.

He was very bored so he just started writing random numbers separated by spaces on the pages of his physics book. For example, he wrote the sequence **1 2 3**  four times. Each one with different sequence of arithmetic operations between numbers, i.e. he wrote **{ (1+2+3) , (1+2\*3) , (1\*2+3) , (1\*2\*3) }** .

He wondered if he wrote a sequence of **N** positive integers, separated by question marks **?**. Each question mark may stand for a plus sign **+** or a multiplication sign **\***.

 Hussain knows that there are possible **2^(n-1)** different expressions. He wondered if he wrote each expression and computed their values and summed up all the values. With what value he will end up with? Since answer may be huge, output it modulo **10^9+7**

### Input

- First line of the input contains a single integer **T** , denotes the number of testcases. The description of **T** test cases follow.
- The first line of each testcase contains an integer **N** denoting how many numbers in the current expression. You may assume that all numbers in the current expression are separated by question marks, and each question mark stands for a plus sign or a multiplication sign.
- The second line of each testcase contains **N** space separated integers, denoting integers in Hussain's expression.

### Output

For each testcase, output a single line containing the sum of results of all possible **2^(n-1)** different expressions considering that each question mark stands for a plus or a multiplication sign.

### Constraints

- **1** ≤ **T** ≤ **500**
- **1** ≤ **n** ≤ **100000**
- All numbers forming expressions are positive numbers less than **109**
- The sum of **n** over all test cases won't exceed **106**

### Example

<pre><b>Input:</b>
2
3
1 2 4
4
1 1 1 1

<b>Output:</b>
30
20
</pre>### Explanation

**Example case 1.** There can be following four expressions.

<pre>
1 + 2 + 4 = 7
1 + 2 * 4 = 9
1 * 2 + 4 = 6
1 * 2 * 4 = 8
</pre>Total sum of results = 30
