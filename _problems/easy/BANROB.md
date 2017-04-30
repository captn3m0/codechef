---
category_name: easy
problem_code: BANROB
problem_name: 'Bank robbery'
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
problem_author: kaizer
problem_tester: kevinsogo
date_added: 10-07-2015
tags:
    - binary
    - easy
    - kaizer
    - math
    - sept15
editorial_url: 'http://discuss.codechef.com/problems/BANROB'
time:
    view_start_date: 1442223000
    submit_start_date: 1442223000
    visible_start_date: 1442223000
    end_date: 1735669800
    current: 1493558211
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin](http://www.codechef.com/download/translated/SEPT15/mandarin/BANROB.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT15/russian/BANROB.pdf). Translations in Vietnamese to be uploaded soon.

Two cheeky thieves (Chef being one of them, the more talented one of course) have came across each other in the underground vault of the State Bank of Churuland. They are shocked! Indeed, neither expect to meet a colleague in such a place with the same intentions to carry away all the money collected during Churufest 2015.

They have carefully counted a total of exactly 1 billion (**109**) dollars in the bank vault. Now they must decide how to divide the booty. But there is one problem: the thieves have only **M** minutes to leave the bank before the police arrives. Also, the more time they spend in the vault, the less amount could carry away from the bank. Formally speaking, they can get away with all of the billion dollars right now, but after **t** minutes they can carry away only  **1 billion \* pt** dollars, where **p** is some non-negative constant less than or equal to unity, and at **t = M**, they get arrested and lose all the money.
They will not leave the vault until a decision on how to divide the money has been made.

The money division process proceeds in the following way: at the beginning of each minute starting from the 1st (that is, **t = 0**), one of them proposes his own way to divide the booty. If his colleague agrees, they leave the bank with pockets filled with the proposed amounts of dollars. If not, the other one proposes his way at the next minute etc. To escape arrest, they can only propose plans till the beginning of the **M**th minute (i.e., till **t = M-1**).
Each thief wants to maximize his earnings, but if there are two plans with the same amounts for him, he would choose the one which leads to a larger total amount of stolen dollars.

Chef is about to start this procedure, and he is the first to propose a plan. You are wondering what will be the final division of money, if each thief chooses the optimal way for himself and money is considering real.

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of input for each test case contains an integer **M** denoting the number of minutes until arrest and a double denoting the constant **p**.

### Output

For each test case, output a single line containing two space-separated doubles denoting the amount of dollars each thief will get in the optimal division. First number: dollars amassed by Chef, and second: by his colleague. The answer will be considered correct if its absolute error doesn't exceed 10-2.

### Constraints and subtasks

- **1** ≤ **T** ≤ **105**
- ≤ **p** ≤  **1**

**Subtask 1** (15 points) :
**1** ≤ **M** ≤ **3**

**Subtask 2** (55 points) :
**1** ≤ **M** ≤  **103**

**Subtask 3** (30 points) :
**1** ≤ **M** ≤ **109**

### Example

```
<b>Input:</b>
2
1 0.5
2 0.5
<b>Output:</b>
1000000000.0 0.0
500000000.0 500000000.0

```
### Explanation

**Example case 1.** In the second case, if decision isn't made at **t = 0**, total amount of money decreases to 5\*108 at **t = 1** which leads to a situation worse than the given solution.