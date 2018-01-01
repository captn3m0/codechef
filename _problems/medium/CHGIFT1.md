---
category_name: medium
problem_code: CHGIFT1
problem_name: 'Chef and Gift'
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
problem_author: furko
problem_tester: ' balajiganapath'
date_added: 6-09-2013
tags:
    - dynamic
    - easy
    - furko
    - ltime04
editorial_url: 'http://discuss.codechef.com/problems/CHGIFT1'
time:
    view_start_date: 1380445200
    submit_start_date: 1380445200
    visible_start_date: 1380445200
    end_date: 1735669800
    current: 1493557558
layout: problem
---
All submissions for this problem are available. Chef likes cooking. But more than that, he likes to give gifts. And now he wants to give his girlfriend an unforgettable gift. But unfortunately he forgot the password to the safe where the money he saved for the gift is kept.

But he knows how to hack the safe. To do this, you need to correctly answer questions asked by the embedded computer. The computer is very strange, and asks special questions, sometimes it can ask about **10000** question (really weird). Because of this, Chef wants you to write a program that will help him to crack the safe.

The questions are different, but there is only one type of question. Several numbers are given and between them one of three characters: **\*, +, -** can be inserted. Note that in this case there is no priority for the operators, that is, if + is the before multiplication, you must first execute the operation of addition, and then multiplication (1 - 2 \* 3 must be interpreted as (1 - 2) \* 3 = -3 and not -5). The computer asks the minimum possible value of any valid expression.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The first line of each test case contains a positive integer **N**. The second line contains **N** space separated integers **A1**, **A2**, ..., **AN** denoting the expression without the operators.

### Output

For each test case, output a single line containing the minimal value of given expression.

### Constraints

- **1 ≤ T ≤ 105**
- **1 ≤ N ≤ 10**
- **-9 ≤ Ai ≤ 9**
.


### Example

<pre><b>Input:</b>
2
3
1 2 3
1
9

<b>Output:</b>
-4
9

</pre>### Explanation
Example case 1: **1-2-3 = -4**

###  Scoring 

Subtask 1 (15 points):  **1 ≤ T ≤ 10**  

Subtask 2 (10 points):  **1 ≤ N ≤ 3**  

Subtask 3 (20 points):  **1 ≤ Ai ≤ 5**. 

Subtask 4 (35 points): **1 ≤ T ≤ 104**  

Subtask 5 (20 points): Look at constraints.
