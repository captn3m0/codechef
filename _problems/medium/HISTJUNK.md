---
category_name: medium
problem_code: HISTJUNK
problem_name: 'Historical Junctions'
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
problem_author: xcwgf666
problem_tester: null
date_added: 27-04-2015
tags:
    - central
    - eccentricity
    - graphs
    - snck151a
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/HISTJUNK'
time:
    view_start_date: 1432379700
    submit_start_date: 1432379700
    visible_start_date: 1432379700
    end_date: 1735669800
    current: 1493557686
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK151A/mandarin/HISTJUNK.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK151A/russian/HISTJUNK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK151A/vietnamese/HISTJUNK.pdf)

After the Great ChefLand War, ChefTown consisted of **N** historical junctions with a sightseeing place in each of them and **M** cobbled roads, connecting them. It is possible to reach any junction from any other one, possibly, via intermediate junctions. The ChefTown Restoration Committee (CTRC) now wants to make the town more convenient, thus, attractive, for the tourists.

The essential requirement for the old town is to be "in the center of the city". For this purpose, each junction **V** has a parameter **d(V)** denoting to the maximal shortest distance (in number of roads taken) you need to pass in order to reach some other junction, introduced by the CTRC.

![](http://codechef.com/download/histjunk_pic.jpg)Let us take an example. Here you have 5 junctions with 5 roads, connecting them. Inside the circle, there is a number of a junction (in black), near the circle, there is a number **d(V)** (in yellow) corresponding to this junction.

Consider the junction, numbered **1**. We have **d(1) = 2** because, you can reach any other junction, passing no more than two roads. In fact, you can reach the junctions **2** and **3** directly, thus, the distance to them is **1**. In order to reach the junction **4** you need to go to the junction **2** and then directly to the junction **4**. The same way you can reach the junction **5** using **2** roads. Of course, you could have travelled to the junction number **4** another way: you could moved to the junction number **3**, then to the junction number **2** and then, finally, to the junction number **4** and that would have taken three roads. But we are interested only in the shortest distances, thus, we have **d(1) = 2**.

If we consider the junction **5**, it will take one road to go to the junction **3**, two roads to go to the junctions **1** and **2** and three roads to go to the junction **4**. So we have **d(5) = 3**.

Let's call the junction a **central** one in case its' parameter of **d(V)** is minimal among all the junctions in the town. On the example above, the junctions numbered **1, 2, 3** are central, and the junctions numbered **4, 5** are not.

Now, CTRC wants to build some new junctions (possibly none) with brand new shops and fast food and new asphalt roads connecting them in such a way that all the historical junctions are **central** in the town. In order to avoid the mess, none of newly built "non-historical" junctions should be central. Moreover, by the regulations of CTRC itself, it is prohibited to build an asphalt road between two historical junctions because it violates the spirit of old times.

All the roads in ChefTown, namely those that were built initially and those that will be built by CTRC are bi-directional.

The CTRC is now short in terms of money. It has sufficient funds only to build no more than **2N** new junctions and no more than **N \* (N - 1)** new roads. Please help them to find an appropriate road-building plan or state that it is impossible.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains integers **N** and **M** denoting the number of historical junctions and the number of roads between them.

The following **M** lines contain pairs of space-separated integers **X** and **Y** denoting that there is a road between the junction numbered **X** and the junction numbered **Y**.

### Output

For each test case, please use the following output format:

If it is impossible to accomplish the requirement, print "-1 -1" (without quotes) in a single line. Otherwise,

- First output a line with two space separated integers: **J** and **A** denoting the number of added junctions and the number of added roads. They should not exceed **2 \* N** and **N \* (N - 1)** respectively.
- Then, output **A** integers denoting the newly built roads. Each of these integers should denote a road by a pair of space-separated junction numbers. The newly built junctions hold the numbers **N+1** **N+2** ... **N+J**. After adding the roads, it should be possible to reach any junction from any other junction (possible, via the intermediate ones). There should not be more than one road between any pair of junctions and no junction should be connect to itself.

### Constraints

- **1** ≤ **T** ≤ **20**
- **1** ≤ **N** ≤ **100**
- **N - 1** ≤ **M** ≤ **N \* (N - 1) / 2**
- **1** ≤ **X, Y** ≤ **N**
- In the given junction-road system, any junction is connected with any other by no more than one road and there is no road that connects the junction to itself. Also, this condition should also be satisfied for the newly constructed junctions and roads between them.

### Example

```
<b>Input:</b>
2
4 4
1 2
2 3
3 4
4 1
4 6
1 2
2 3
3 4
4 1
1 3
2 4

<b>Output:</b>
4 4
1 5
2 6
3 7
4 8
0 0

```
### Explanation

**In the first example**, the obtained road system satisfies the required constraints. Please note that you don't need to minimize the number of added roads and junctions.

**In the second example**, you can leave everything as it is because the given graph already satisfies the constraints.