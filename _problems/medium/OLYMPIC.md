---
category_name: medium
problem_code: OLYMPIC
problem_name: 'Gifts at Olympics'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: flying_ant
problem_tester: laycurse
date_added: 8-06-2012
tags:
    - cook23
    - easy
    - flying_ant
editorial_url: 'http://discuss.codechef.com/problems/OLYMPIC'
time:
    view_start_date: 1339959726
    submit_start_date: 1339959726
    visible_start_date: 1339959300
    end_date: 1735669800
    current: 1493557830
layout: problem
---
All submissions for this problem are available.The Olympic Games, world's foremost sports competition, will be hosted by London next month. Tens of thousands of participants from over 200 nations will be participating this year. Each game has only 3 winners, so the organizers have decided to give special chocolate gift pack to each participant.

A huge number of chocolates have just arrived from **N** different villages, numbered 1 to **N**. The organizers have decided the number of chocolates to be given to each participant. This is given in **count**, where **count**\[_i_\] is the number of chocolates from _i_th village, to be placed in each gift pack. Now they need to order boxes for these chocolates. A box of size **S** can store at most **S** chocolates. A gift pack is made as follows.

Each of the **N** villages is assigned a unique colored box and chocolates from a village are placed only in boxes assigned to it. The organizers always want to minimize the number of boxes in each gift pack. E.g., for given **N** = 3 villages and **count** = {3, 12, 7}, suppose colors assigned are _A_, _B_, _C_. If size of each box is **S** = 4, then we need 1 box of color A, 3 boxes of color B and 2 boxes of color C. All the boxes for a gift pack are then packed in a row using transparent wrapper. So in the above example, a gift pack can be "_ABBBCC_" or "_ABCBCB_" etc.

To make everyone feel special, no two participants are given same gift packs. Two gift packs are different if and only if they have the different order of colored boxes, even in reverse order. For example "_ABBBCC_" is same as "_ABBBCC_" and also same as "_CCBBBA_". Given **Q** queries, each specifying the size of a box **S**, find the total number of different gift packs possible if we use boxes of size **S** each. Output the result modulo 1000000007 (109+7).

### Input

The first line has an integer **N**. The second line has the array **count**, **N** space separated integers. The next line has integer **Q**, followed by **Q** lines, each having an integer size **S**.

1 ≤ **N**, **count**\[_i_\], **Q** ≤ 100000 (105)
1 ≤ sum of all **count**\[_i_\] ≤ 100000 (105)
1 ≤ **S** ≤ 1000000000 (109)

### Output

Output **Q** lines, one for each query, the total number of different gift packs possible, using boxes of size **S**, specified in that query modulo 1000000007 (109+7).

### Example

```

<b>Input:</b>
3
5 3 12
4
4
5
2
12

<b>Output:</b>
30
10
2320
3

```


**Explanation:**
In the last query, size of each box **S** = 12.

Suppose the colors assigned to the 3 villages are _A_, _B_, _C_ respectively, we need 1 box of each color. 

Only 3 different gift packs can be made. They are "_ABC_", "_ACB_", "_BAC_".