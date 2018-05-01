---
category_name: school
problem_code: WDTBAM
problem_name: 'Who dares to be a millionaire'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: eartemov
problem_tester: null
date_added: 20-07-2015
tags:
    - ad
    - cakewalk
    - eartemov
    - oct15
editorial_url: 'http://discuss.codechef.com/problems/WDTBAM'
time:
    view_start_date: 1444642200
    submit_start_date: 1444642200
    visible_start_date: 1444642200
    end_date: 1735669800
    current: 1492506750
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT15/mandarin/WDTBAM.pdf) and [Russian](http://www.codechef.com/download/translated/OCT15/russian/WDTBAM.pdf) 

Chef is going to participate in a new quiz show: "Who dares to be a millionaire?"

According to the rules of the game, contestants must answer **N** questions. The quiz being famous for its difficulty, each question has **26** candidate answers, but only one of which is correct. Answers are denoted by capital Latin letters from A to Z. Chef knows all the questions that can be asked, and for each of them he knows the answer candidate he will choose (some of them can be incorrect). For each question, we'll tell you Chef's answer to it.

The game goes on as follows. First, all the questions are shuffled randomly. Then, a contestant is asked these questions one-by-one in the new shuffled order. If the contestant answers any question incorrectly, the game is over. Total winnings of the contestant are calculated as follows. Let **X** denote the number of questions answered correctly by the contestant. Depending on this value, the winnings are determined: **W0** dollars is the amount won for **X = 0**, **W1** dollars is for **X = 1**, and so on till **X = N**. Note that the game was invented by a twisted mind, and so a case where **Wi** ≥ **Wi + 1** for some 0 ≤ **i** ≤ **N − 1** is possible. Chef is interested in finding the maximum possible winnings that he can amass.

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of questions.

Next line contains **N** capital Latin letters denoting the correct answers to these questions.

Next line contains **N** capital Latin letters denoting answers given by Chef to these questions.

Next line contains **N + 1** space-separated integers **W0**, **W1**, ..., **WN** denoting the winnings for 0, **1**, ..., **N** correct answers.

### Output

For each test case, output a single line containing the value of maximum possible winnings that Chef can get.

### Constraints

- **1** ≤ **T** ≤ **500**
- **1** ≤ **N** ≤ **1000**
- 0 ≤ **Wi** ≤ **109**

### Subtasks

**Subtask 1: (20 points)**

- **1** ≤ **N** ≤ **8**

**Subtask 2: (80 points)**

- Original constraints

### Example

<pre><b>Input:</b>
<tt>3
5
ABCDE
EBCDA
0 10 20 30 40 50
4
CHEF
QUIZ
4 3 2 1 0
8
ABBABAAB
ABABABAB
100 100 100 100 100 100 100 100 100</tt>

<b>Output:</b>
<tt>30
4
100</tt>

</pre>### Explanation

**Example case 1.** If questions will be placed in order: **2nd** (Chef's answer is B, which is correct), **3rd** (Chef's answer is C, and it is correct as well), **4th** (Chef's answer is D, and he is right), **5th** (Chef's answer is A but correct answer is E and the game is over), **1st**, Chef will correctly answer **3** questions, and therefore win **30** dollars.

**Example case 2.** Chef's answers for all questions are incorrect, so his winnings are **W0** dollars.

**Example case 3.** Since all **Wi** are equal to **100** dollars, Chef will win this sum in any possible case.
