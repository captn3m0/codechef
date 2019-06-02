---
category_name: easy
problem_code: ANUBTG
problem_name: 'Suraj goes shopping'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: anudeep2011
problem_tester: xiaodao
date_added: 5-01-2015
tags:
    - anudeep2011
    - cook54
    - easy
    - greedy
editorial_url: 'http://discuss.codechef.com/problems/ANUBTG'
time:
    view_start_date: 1421609400
    submit_start_date: 1421609400
    visible_start_date: 1421609400
    end_date: 1735669800
    current: 1493558106
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK54/mandarin/ANUBTG.pdf) and [Russian](http://www.codechef.com/download/translated/COOK54/russian/ANUBTG.pdf) as well.

### Problem description

It is winter super sale and all the shops have various offers. Suraj selected **N** items to buy and he is standing in the billing queue. It was then he noticed the offer "Buy two, get two". That means for every two items you buy, they give you two items for free. However, items can be of varying price, they always charge for 2 most costly items and give other 2 as free. For example, if the items cost 1, 1, 2, 2, then you have to pay 4 and take all 4 items.

Suraj is busy reordering his items to reduce the total price he has to pay. He can separate the items and get them on different bills if needed. Can you tell me what is the least price Suraj has to pay to buy all the **N** items?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. First line of each test case has single integer **N**. Second line of each test case has **N** space separated integers, which are the costs of items Suraj want to buy.

### Output

For each test case, output a single line containing the required answer.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **N** ≤ **1000**
- **1** ≤ **Cost of items** ≤ **1000**

### Example

<pre><b>Input:</b>
3
4
1 1 2 2
2
10 200
7
1 1 10 2 2 2 1

<b>Output:</b>
4
210
14
</pre>
### Explanation

**Example case 1**

Suraj pays for 2 costly items and gets other 2 for free.

**Example case 2**

Suraj has to pay for both the items, he wont get anything for free.

**Example case 3**

Suraj separates the items into 2 bills. In one bill he pays 12. And in another bill he pays 2.
