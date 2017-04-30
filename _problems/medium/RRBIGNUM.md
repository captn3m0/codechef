---
category_name: medium
problem_code: RRBIGNUM
problem_name: 'Big Number'
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
problem_author: Rubanenko
problem_tester: utkarsh_lath
date_added: 21-09-2013
tags:
    - Rubanenko
    - cook38
    - medium
    - segment
editorial_url: 'http://discuss.codechef.com/problems/RRBIGNUM'
time:
    view_start_date: 1379874600
    submit_start_date: 1379874600
    visible_start_date: 1379874600
    end_date: 1735669800
    current: 1493557884
layout: problem
---
All submissions for this problem are available.Given a binary represantation of number **N**. You are to find how many numbers from  to **N** have **even** number of **ones** in their binary represantation.

There is also an update operation, update **(L,R)**, which means that all bits of **N** from **Lth** to **Rth** are flipped, i.e. ones to zeroes and vice versa. You have to also find the answer after each of these updates.

### Input

The first line of input file contains binary represantation of number **N**. The second line contains number **M** - the number of update queries. Then **M** lines follow that describe each update query by two numbers - **L** and **R**. Note that the digits of **N** are numbered from left to right. That is, the leftmost(most significant) bit is numbered **1**.

### Output

Output the answer for initial value of **N** and also after each of the **M** updates modulo **109+7** in separate lines.

### Constraints

- **1 ≤ L ≤ R ≤**  number of bits in **N ≤ 1063. 1 ≤ M ≤ 105**
- all digits of **N** are either **'0'** or **'1'**.

### Example

```
<b>Input:</b>
000
5
3 3
2 3
3 3
2 3
1 3

<b>Output:</b>
1
1
1
2
1
4

```
### Explanation

After the final operation, **N** becomes 7. All numbers in range **\[0..7\]** that have even number of ones in their binary representation are: **0, 3, 5** and **6**.