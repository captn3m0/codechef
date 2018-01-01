---
category_name: easy
problem_code: COOK82B
problem_name: 'Balanced Array'
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
problem_author: deadwing97
problem_tester: kingofnumbers
date_added: 20-05-2017
tags:
    - cook82
    - deadwing97
    - easy
    - prime
    - simple
time:
    view_start_date: 1495391400
    submit_start_date: 1495391400
    visible_start_date: 1495391400
    end_date: 1735669800
    current: 1497284055
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK82/mandarin/COOK82B.pdf), [russian](http://www.codechef.com/download/translated/COOK82/russian/COOK82B.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK82/vietnamese/COOK82B.pdf) as well.

Hussain really likes playing with arrays. Today he challenged his friend Farah to beat a game he has invented recently.

Hussain will give Farah an array of **N** positive integers. Farah is allowed to do this move multiple times:

Farah can choose three integers (**i , j , k**) such that **k** is a positive integer, 1 ≤ **i,j** ≤ **N**, and **A\[i\]** is divisible by **k**. Then she should do the following :

**A\[i\]** = **A\[i\]** / **k**

**A\[j\]** = **A\[j\]** \* **k**

That is, she should multiply **A\[j\]** by **k**, and divide **A\[i\]** by **k**.

Farah must make all the elements of this array equal, by only performing above move, as many times as she wants.

Most of the times, it would be impossible to achieve an array of equal elements. So Farah is allowed to insert at most one element. You can prove that she can always insert an element, so that after the insertion, it becomes possible to make the array elements equal (including the new element), through a series of moves. You have to help Farah find the minimum positive integer that she has to insert into the array so that it's possible for her to make all elements equal after inserting this number.or just tell her that there is no need to insert an additional number.

### Input

The first line contains a single integer, **N**, the number of elements in the array.

The second line contains **N** positive space separated integers.

### Output

In case there is no need to insert an additional number output "justdoit" (without quotations). Otherwise, output the smallest positive integer that Farah must insert into the array. Since this number can be large, you're asked to print the remainder of its division by **109+7**

### Constraints

- 1 ≤ **N** ≤ 5000
- 1 ≤ **A\[i\]** 9
 
### Example

<pre><b>Input:</b>
3
4 6 14

<b>Output:</b>
9261

</pre>### Example 2
<pre><b>Input:</b>
4
25 15 5 27

<b>Output:</b>
justdoit

</pre>### Explanation
In the first Example, after inserting 9261, the array becomes {4, 6, 14, 9261}. We will show a series of moves through which Farah can make the array elements equal. We follow 1-based indexing.

- (1, 4, 2). The array becomes {4/2, 6, 14, 9261\*2} = {2, 6, 14, 18522}
- (4, 1, 21). The array becomes {2\*21, 6, 14, 18522/21} = {42, 6, 14, 882}
- (4, 3, 3). The array becomes {42, 6, 14\*3, 882/3} = {42, 6, 42, 294}
- (4, 2, 7). The array becomes {42, 6\*7, 42, 294/7} = {42, 42, 42, 42}

There is no smaller positive integer which be inserted to get an equal array. Hence the answer is 9261.
