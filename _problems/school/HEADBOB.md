---
category_name: school
problem_code: HEADBOB
problem_name: 'Tanu and Head-bob'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: piyushkumar
problem_tester: xiaodao
date_added: 20-08-2014
tags:
    - ad
    - cakewalk
    - ltime17
    - piyushkumar
editorial_url: 'http://discuss.codechef.com/problems/HEADBOB'
time:
    view_start_date: 1414312200
    submit_start_date: 1414312200
    visible_start_date: 1414312200
    end_date: 1735669800
    current: 1492507616
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME17/mandarin/HEADBOB.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME17/russian/HEADBOB.pdf).

Tanu has got interested in signs and gestures that we use for communication. One such gesture is the head-bob.
When we want to signal "Yes" to someone, we move the head up-and-down. For "No", the head is moved left-and-right, rotating about the vertical axis.
 There is a peculiar way of gesturing "Yes", commonly seen in India, by moving head sideways (rotating about the forward-back axis). This is called the  _Indian head-bob_.

Tanu observed many people on the railways station, and made a list of gestures that they made. Usual "Yes" gesture is recorded as "**Y**", no as "**N**" and Indian "Yes" gesture as "**I**". (Assume no foreigner uses the Indian "Yes" gesture and vice-versa). Identify which of them were Indians, which were not Indian, and which one you cannot be sure about.

### Input

First line contains T, number of people observed by Tanu.
Each person is described in two lines. First line of the description contains a single integer N, the number of gestures recorded for this person. Next line contains a string of N characters, each character can be "Y", "N" or "I".### Output

For each person, print "INDIAN" if he/she is from India, "NOT INDIAN" if not from India, and "NOT SURE" if the information is insufficient to make a decision.### Constraints


``12. **For 30 points:** 1 ≤ T,N ≤ 100
13. **For 70 points:** 1 ≤ T,N ≤ 1000### Example
  
  **Input:**`3<br></br>5<br></br>NNNYY<br></br>6<br></br>NNINNI<br></br>4<br></br>NNNN<br></br>`
  **Output:**`NOT INDIAN<br></br>INDIAN<br></br>NOT SURE`