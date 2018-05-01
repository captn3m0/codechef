---
category_name: school
problem_code: CHEFDETE
problem_name: Chef-Detective
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
problem_author: cenadar
problem_tester: iscsi
date_added: 11-10-2015
tags:
    - cakewalk
    - cenadar
    - feb16
    - hashing
    - tree
editorial_url: 'http://discuss.codechef.com/problems/CHEFDETE'
time:
    view_start_date: 1455528600
    submit_start_date: 1455528600
    visible_start_date: 1455528600
    end_date: 1735669800
    current: 1492506721
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB16/mandarin/CHEFDETE.pdf), [Russian](http://www.codechef.com/download/translated/FEB16/russian/CHEFDETE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB16/vietnamese/CHEFDETE.pdf) as well.

Chef is a private detective. He was asked to investigate a case of murder in the city of Frangton.

Chef arrived in Frangton to find out that the mafia was involved in the case. Chef spent some time watching for people that belong to the clan and was able to build a map of relationships between them. He knows that a mafia's organizational structure consists of a single Don, heading a hierarchical criminal organization. Each member reports exactly to one other member of the clan. It's obvious that there are no cycles in the reporting system of the mafia.

There are **N** people in the clan, for simplicity indexed from **1** to **N**, and Chef knows who each of them report to. Member **i** reports to member **Ri**.

Now, Chef needs to identfy all potential killers to continue his investigation. Having considerable knowledge about the mafia's activities, Chef knows that the killer must be a minor criminal, that is, one of the members who nobody reports to. Please find the list of potential killers for Chef. Since Don reports to nobody, his **Ri** will be equal to 0.

### Input

The first line of input contains one integer **N**.

Next line has **N** space-separated integers, the **ith** integer denotes **Ri** — the person whom the **ith** member reports to.

### Output

Output a list of space-separated integers in ascending order — the indices of potential killers.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **Ri** ≤ **N** except for Don, whose **Ri** equals to 0.
- It is guaranteed that there are no cycles in the reporting structure.

### Subtasks

- **Subtask #1 \[50 points\]: N ≤ 10000**
- **Subtask #2 \[50 points\]: No additional constraints**

### Example

<pre><b>Input:</b>
6
0 1 1 2 2 3

<b>Output:</b>
4 5 6
</pre>### Explanation

The reporting structure:

![](https://lh3.googleusercontent.com/UrdUW05iT_LOZiLTYN51Khch-mIuc8NjhtOISQZZ1y_N24kkUZxFvGGNGKSE9sh_Qxxa3MqcI0o6ppT0J8YsQ9UYMP7GGA9mrASzAhErKZq5ALY5doBsDUGxndatF2dNKxpJdvD4xKpEpmhl_yLGjfU_cLPf4ylKSH01v_-w_xv7b5H_DokIRpIJSW7sUmLkVG7uYCVSR9Es8QwFZO5FBJpC-DPo4liLZYhHPpcWt1rZq2afrajg6gwrKzMYlDVT1TcXa2IUGZSfXL_jqgkGOEVIHweFh9nouuqEfPfapchv_hFxa3CqeXcK9sa8HEvr4EUW3kx0cmDAGjWH4xDzMzEsWiVyZINbQeocOKaledrfspyXZyaL1Pls7vKKH5OkUwKuzMG0jc24iCuq2M7kJgLoVmld5Wn-AsYTpaGYpn3oMnudnfJG5jUkdZ0rC7Ak_n-N5G2MuyH93gA_MGLMf-ko3s22LFGqTnSf1dTipyEgU1KiX9k5c2hyjfHVP6WMtoITZk0usFiKPbqkh0EDKa-fl5KYuWoMVr9ag5lPxQk=w412-h416-no)
