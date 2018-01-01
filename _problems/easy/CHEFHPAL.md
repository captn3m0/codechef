---
category_name: easy
problem_code: CHEFHPAL
problem_name: 'Chef Hates Palindromes'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: r_64
problem_tester: null
date_added: 6-09-2017
tags:
    - bruteforce
    - medium
    - nov17
    - r_64
editorial_url: 'https://discuss.codechef.com/problems/CHEFHPAL'
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1514815999
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/CHEFHPAL.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/CHEFHPAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/CHEFHPAL.pdf) as well.

 Chef's birthday is coming soon! His friend Fehc is going to send him a string of length **N** as a gift. Knowing that Chef doesn't like palindromes, Fehc wants the longest palindromic substring to be as short as possible. The string should only contain the first **A** latin letters(e.g. let **A**=2, then this string only contains 'a' and 'b'). Please help Fehc and find such a string. If multiple solution exists, you can print any.

###  Input

- The first line of input is an integer **T**, denoting the number of test cases.
- **T** tests follow. For each test, there is a line containing two space-separated integers **N** and **A**.

###  Output

 For each test, print a number **L** and a string **s**, separated by one space. **L** is equal to the length of longest palindromic substring of **s**, and **s** is the string that Fehc will give to Chef. You must minimize **L**, but in the case of multiple **s**'s, any valid **s** is OK.

###  Constraints

- **1**≤**T**≤****105****
- **1**≤**N**≤**105**
- **1**≤**A**≤**26**
- (sum of **N** in all test cases)≤****105****

 Subtask #1 (21 points):

- **N≤10**.

 Subtask #2 (79 points):

- original constraints.

###  Example

<pre>
<b>Input:</b>
4
5 2
12 26
8 26
7 2

<b>Output:</b>
3 aaabb
1 hapybirthday
1 codechef
3 aaababb


</pre>###  Explanation
 **Example case 1.** There are multiple solutions. For example, "abaaa" is also correct. **Note that "abbaa" is not a correct solution, since "abba" is a palindromic substring of length 4, which is not optimal.**
