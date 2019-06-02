---
category_name: hard
problem_code: FLOWERPO
problem_name: 'Flower Pots'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: null
date_added: 8-08-2017
tags:
    - admin3
time:
    view_start_date: 1503048600
    submit_start_date: 1503048600
    visible_start_date: 1503048600
    end_date: 1735669800
    current: 1514817154
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/AUG17/mandarin/FLOWERPO.pdf) and [russian](http://www.codechef.com/download/translated/AUG17/russian/FLOWERPO.pdf).

The Chef wants to celebrate Independence Day with fireworks. He's particularly fond of Flower Pot crackers (or Fountain fireworks) which spew out fire around them:

![](https://codechef_shared.s3.amazonaws.com/download/upload/AUG17/FLOWERPO.png)He's decided that he wants a row of **N** of these crackers. He has decided where exactly each of them will be placed. In particular, we can say that the crackers will be on a line with coordinates **A1**, **A2**, ..., **AN**.

These crackers come in many *strengths*. For any integer S ≥ 0, unlimited number of crackers of strength S are available for sale at the shop. The larger the strength of a cracker, the higher and wider it will spew fire. In particular, a cracker whose strength is s, and which is placed at coordinate X will spew fire everywhere in the interval \[X - S, X + S\], both end points inclusive. The cost of a cracker of strength S is S2.

Chef wants to decide what the strengths of each of the **N** crackers should be. He wants to light up only one of the **N** crackers, the **C**-th one, which is as coordinate **AC**. The other **N** - 1 crackers should light up automatically. That is, suppose the cracker at **AC** has a strength of S**C**, then it will light up any unlit cracker in the interval \[**AC** - S**C**, **AC** + S**C**\]. And these should then explode and light up more crackers, etc. This should continue until all the crackers are lit. Also, each cracker, once lit, takes 1 second to explode. Once it explodes, it instantaneously lights up all the unlit crackers in its interval. And Chef wants all the crackers to be lit up (not necessarily explode) within **B** seconds after he has lit **AC**. That is, if a cracker is lit up **B** seconds after he has lit **AC**, even though it has not exploded, Chef is happy with it, and it is valid.

Find out the minimum amount Chef has to spend in buying the crackers so as to achieve his goals.

### Input

- The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows.
- The first line of each testcase contains three integers, **N**, **B** and **C**, which denote the number of crackers, the time within which all the crackers should be lit up, and the index of the cracker which he will light up, respectively.
- The next line contains **N** integers: **A1**, **A2**, ..., **AN**.

### Output

- For each test case, output a single line containing a single integer which should be the minimum total cost.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N** ≤ 3000
- 1 ≤ **B** ≤ 3000
- 1 ≤ **C** ≤ **N**
- 1 ≤ **N** \* **B** ≤ 30000
- 1 ≤ **A1** A2 AN ≤ 108

### Subtasks

- **Subtask 1** (20 points) : **C** = 1
- **Subtask 2** (80 points) : Original constraints

### Example

<pre><b>Input:</b>
1
5 2 4
2 4 10 15 18

<b>Output:</b>
89
</pre>
### Explanation

One optimal way is to choose the strengths of the crackers as (0, 0, 8, 5, 0). That is, the leftmost cracker has strength 0, the next has 0, the next has 8, etc. Now, Chef lights up the 4-th cracker.

After 1 second, it explodes and it lights up all the unlit crackers in its interval. Because its strength is 5, its interval would be \[15 - 5, 15 + 5\] = \[10, 20\]. So after 1 second, the third and fifth cracker are also lit.

After one more second (ie. 2 seconds from when Chef lit up the 4- cracker), those two explode. Because the fifth's strength is 0, it doesn't affect anything else. But the third cracker's strength is 8, and hence it lights up all unlit crackers in the interval \[10 - 8, 10 + 8\] = \[2, 18\]. Note that this includes all the crackers. Hence all the unlit crackers are lit up instantaneously, and so all the five crackers have been lit within 2 seconds of Chef lighting up the one cracker. Thus this is a valid configuration. Also note that the first and second crackers have only been lit, and they are yet to explode. But that is fine.

The total cost of this is 02 + 02 + 82 + 52 + 02 = 89. You cannot get a lower cost, and hence this is the answer.
