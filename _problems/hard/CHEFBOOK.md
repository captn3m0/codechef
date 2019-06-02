---
category_name: hard
problem_code: CHEFBOOK
problem_name: Chefbook
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: shiplu
problem_tester: null
date_added: 8-05-2015
tags:
    - hard
    - june15
    - lp
    - maxflow
    - shiplu
editorial_url: 'http://discuss.codechef.com/problems/CHEFBOOK'
time:
    view_start_date: 1434360600
    submit_start_date: 1434360600
    visible_start_date: 1434360600
    end_date: 1735669800
    current: 1493556633
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JUNE15/mandarin/CHEFBOOK.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE15/russian/CHEFBOOK.pdf).

The Chief Chef has built a new social network call **Chefbook**. Everyone who is interested in cooking can join Chefbook. Already **N** chefs joined the chefbook and loved it so much.

In Chefbook, a chef can be a friend with other chefs (one or more). The friendship is not bidirectional that means if chef **A** is a friend of chef **B**, not necessarily chef **B** is a friend of chef **A**. Every chef **x** in Chefbook will give a likeness value **Lxy** to each of his Chefbook friend **y**. Likeness indicates how much he like his friend.

The Chief Chef wants that every chef in Chefbook should have friends with moderate likeness only. He does not like the fact one chef likes another chef too much or one chef does not like another chef at all. As he is the admin of the Chefbook, he decided to change the likeness value of some chef’s such that all the likeness value resides between a lower value and upper value. But changing likeness value for each friendship could be tedious and boring job. So Chief Chef comes up with a new idea. He will choose a chef **x** of Chefbook and increase likeness **Lxy** by **Px** for all of his friends **y**. Another option is he will choose a chef **y** and decrease likeness **Lxy** by **Qy** for all chef **x** such that **y** is a friend of **x**. The increase operation on **x** or decrease operation on **y** can be done only once. During any operation the intermediate value of **Lxy** can have any value but the final value of **Lxy** (for all **x** and **y**) should be in between **Sxy** and **Txy**  (inclusive), where **Sxy** and **Txy** are the lower limit and upper limit respectively of the new likeness value **Wxy** of chef **x** for his friend **y**.

**Wxy = Lxy + Px - Qy**

Though Chief Chef wants to moderate the likeness value but he does not wants reduce overall likeness in Chefbook. So he decided to make the change such that sum of likeness **Wxy** should be as maximum as possible.

### Input

The first line of input contains an integer **T**, denoting the number of test cases to follow.
The first line of each test case contains two space separated integers **N** and **M**, denoting the number of chefs in the Chefbook and number of friend relationship in Chefbook respectively. Followed by **M** lines, each containing five space separated integers **x**, **y**, **Lxy**, **Sxy** and **Txy** such that **y** is a friend of **x** where **Lxy** is the **y**’s likeness value given by **x** and **Sxy** and **Txy** are the lower and upper limit respectively of the new likeness **Wxy** set by Chief chef. Note that **x** and **y** can be same (a chef can like himself).

### Output

First line of each test case will contain a single line with a single word "**Unlike**" (without the quotes) if it is not possible to change the likeness value according to the constraint described above. Otherwise each test case will consist of three lines. First line will contain a single integer **SUM**, which is the sum of the new likeness value **Wxy**. Next line will contain **N** space separated integers containing **Px** (for all **x = 1** to **N**). Similarly next line will contain **N** space separated integers containing **Qy** (for all **y = 1** to **N**). If there are several **P** and **Q** possible output anyone of them.

 Note that, there will be no new friendship within these operation.

### Constraints

- **1≤T≤10**
- **1≤N≤100**
- **1≤M≤N2**
- **1≤x, y≤N**
- **-600≤Lxy≤600**
- **-1000≤Sxy≤Txy≤1000**
- **0≤Px, Qy≤106**

### Subtask

**Subtask #1:**  Point 20

- **1≤N≤20**

**Subtask #2:**  Point 80

- **1≤N≤100**

### Example

<pre><b>Sample Input</b>
2
2 4
1 1 2 5 10
1 2 4 8 10 
2 1 3 5 10
2 2 2 7 10
2 4
1 1 1 7 7
1 2 7 7 7
2 1 7 7 7
2 2 7 7 7

<b>Output for Sample Input</b>
37
15 17
10 9
Unlike

</pre>