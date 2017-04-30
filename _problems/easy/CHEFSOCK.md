---
category_name: easy
problem_code: CHEFSOCK
problem_name: 'Chef and Socks'
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
problem_author: mgch
problem_tester: null
date_added: 6-02-2016
tags:
    - cakewalk
    - ltime33
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/CHEFSOCK'
time:
    view_start_date: 1456592400
    submit_start_date: 1456592400
    visible_start_date: 1456592400
    end_date: 1735669800
    current: 1493558121
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME33/mandarin/CHEFSOCK.pdf), [Russian](http://www.codechef.com/download/translated/LTIME33/russian/CHEFSOCK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME33/vietnamese/CHEFSOCK.pdf) as well.

Today, Chef woke up to find that he had no clean socks. Doing laundry is such a turn-off for Chef, that in such a situation, he always buys new socks instead of cleaning the old dirty ones. He arrived at the fashion store with **money** rupees in his pocket and started looking for socks. Everything looked good, but then Chef saw a new jacket which cost **jacketCost** rupees. The jacket was so nice that he could not stop himself from buying it.

Interestingly, the shop only stocks one kind of socks, enabling them to take the unsual route of selling single socks, instead of the more common way of selling in pairs. Each of the socks costs **sockCost** rupees.

Chef bought as many socks as he could with his remaining money. It's guaranteed that the shop has more socks than Chef can buy. But now, he is interested in the question: will there be a day when he will have only 1 clean sock, if he uses a pair of socks each day starting tommorow? If such an unlucky day exists, output "Unlucky Chef", otherwise output "Lucky Chef". Remember that Chef never cleans or reuses any socks used once.

### Input

The first line of input contains three integers — **jacketCost, sockCost, money** — denoting the cost of a jacket, cost of a single sock, and the initial amount of money Chef has, respectively.

### Output

In a single line, output "Unlucky Chef" if such a day exists. Otherwise, output "Lucky Chef".

### Constraints

- **1** ≤ **jacketCost** ≤ **money** ≤ **109**
- **1** ≤ **sockCost** ≤ **109**

### Example

```
<b>Input:</b>
1 2 3

<b>Output:</b>
Unlucky Chef

<b>Input:</b>
1 2 6

<b>Output:</b>
Lucky Chef


```
### Subtasks

- **Subtask 1:**  **jacketCost, money, sockCost** ≤ 103. **Points - 20**
- **Subtask 2:** Original constraints. **Points - 80**

### Explanation

Test #1:

When Chef arrived at the shop, he had 3 rupees. After buying the jacket, he has 2 rupees left, enough to buy only 1 sock.

Test #2:

Chef had 6 rupees in the beginning. After buying the jacket, he has 5 rupees left, enough to buy a pair of socks for 4 rupees.