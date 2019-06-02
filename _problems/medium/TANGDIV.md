---
category_name: medium
problem_code: TANGDIV
problem_name: 'Divide the Tangerine'
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
problem_author: malinovsky239
problem_tester: shiplu
date_added: 28-02-2014
tags:
    - ad
    - april14
    - easy
    - malinovsky239
editorial_url: 'http://discuss.codechef.com/problems/TANGDIV'
time:
    view_start_date: 1397468079
    submit_start_date: 1397468079
    visible_start_date: 1397467741
    end_date: 1735669800
    current: 1493557942
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/APRIL14/mandarin/TANGDIV.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL14/russian/TANGDIV.pdf).

Once Chef decided to divide the [tangerine](http://en.wikipedia.org/wiki/Tangerine) into several parts. At first, he numbered tangerine's segments from **1** to **n** in the clockwise order starting from some segment. Then he intended to divide the fruit into several parts. In order to do it he planned to separate the neighbouring segments in **k** places, so that he could get **k** parts: the **1st** - from segment **l1** to segment **r1** (inclusive), the **2nd** - from **l2** to **r2**, ..., the **kth** - from **lk** to **rk** (in all cases in the clockwise order). Suddenly, when Chef was absent, one naughty boy came and divided the tangerine into **p** parts (also by separating the neighbouring segments one from another): the **1st** - from segment **a1** to segment **b1**, the **2nd** - from **a2** to **b2**, ..., the **pth** - from **ap** to **bp** (in all cases in the clockwise order). Chef became very angry about it! But maybe little boy haven't done anything wrong, maybe everything is OK? Please, help Chef to determine whether he is able to obtain the parts he wanted to have (in order to do it he can divide **p** current parts, but, of course, he can't join several parts into one).

 Please, note that parts are not cyclic. That means that even if the tangerine division consists of only one part, but that part include more than one segment, there are two segments which were neighbouring in the initial tangerine but are not neighbouring in the division. See the explanation of **example case 2** to ensure you understood that clarification.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
The first line of each test case contains three space separated integers **n**, **k**, **p**, denoting the number of tangerine's segments and number of parts in each of the two divisions. The next **k** lines contain pairs of space-separated integers **li** and **ri**. The next **p** lines contain pairs of space-separated integers **ai** and **bi**.

It is guaranteed that each tangerine's segment is contained in exactly one of the first **k** parts and in exactly one of the next **p** parts.

### Output

For each test case, output a single line containing either "Yes" or "No" (without the quotes), denoting whether Chef is able to obtain the parts he wanted to have.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **n** ≤ **5 \* 107**
- **1** ≤ **k** ≤ **min(500, n)**
- **1** ≤ **p** ≤ **min(500, n)**
- **1** ≤ **li**, **ri**, **ai**, **bi** ≤ **n**

### Example

<pre><b>Input:</b>
2
10 3 2
1 4
5 5
6 10
1 5
6 10
10 3 1
2 5
10 1
6 9
1 10

<b>Output:</b>
Yes
No
</pre>
### Explanation

**Example case 1:** To achieve his goal Chef should divide the first part (1-5) in two by separating segments 4 and 5 one from another.

**Example case 2:** The boy didn't left the tangerine as it was (though you may thought that way), he separated segments 1 and 10 one from another. But segments 1 and 10 are in one part in Chef's division, so he is unable to achieve his goal.
