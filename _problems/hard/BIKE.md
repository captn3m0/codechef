---
category_name: hard
problem_code: BIKE
problem_name: 'Chef and Bike'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: wwwwodddd
problem_tester: xcwgf666
date_added: 15-09-2016
tags:
    - hard
    - maths
    - matrix
    - nov16
    - wwwwodddd
editorial_url: 'http://discuss.codechef.com/problems/BIKE'
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1493556620
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/BIKE.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/BIKE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/BIKE.pdf) as well.

In Chefland, there are **n** cities and **m** one-way roads between cities. The chef will travel between cities along these roads using a very unusual bike. The circumference of the front wheel is **n** (the same as the number of cities) yet the circumference of its rear wheel is only **n - 1**. We think of the circumference of each wheel as being broken up into equal-spaced _positions_. So the front wheel has positions **0, 1, ..., n-1** and the rear wheel has positions **0, 1, ..., n-2**. Each unit of distance travelled will advance each wheel 1 position.

For example, when the chef travels a distance of **d** when both wheels start at position , the position of the front wheel is left at **d (mod n)** and the position of the rear wheel is left at **d (mod (n - 1))**.

Furthermore, the chef bikes very fast and the roads are very bumpy. Quite frequently at least one wheel is not touching the ground. When this happens, the wheel does not turn at all (the bike needs some lubrication). So the front and rear wheel may not even rotate the same total number of positions when travelling along a road.

For each road **i**, we are given the start city **s\[i\]**, the end city **e\[i\]**, the distance the front wheel travels **f\[i\]**, and the distance of the rear wheel **r\[i\]**.

Both wheels start at position  at the beginning of the chef's trip. After traveling a sequence of roads **i1,i2, ..., ik** the front wheel is in position **F := f\[i1\] + f\[i2\] + ... + f\[ik\] (mod n)**. Similarly, the rear wheel is in position **R := r\[i1\] + r\[i2\] + ... + r\[ik\] (mod n-1)**.

The chef wants to start and end in the same city, but is ok starting in any city. The chef is also ok visiting a city more than once; it is the journey that counts, not the destinations.

The chef is also interested in calculating the number of paths where the final positions **F** and **R** equal certain values and the number of roads traversed equals a certain value (if he uses an road twice, it counts twice). Since the answer is quite large, you only need to output the answer mod 1163962801.

### Input

The first line contains three integers, indicating **n** and **m** and **t**. Here, **n** is the number of cities (and the circumference of the front wheel, and one more than the circumference of the rear wheel), **m** is the number of roads, and **t** is the number of roads the chef wants to travel over. Remember, if the chef travels over the same road twice, it counts twice.

The following **m** lines describe a road. The **i**'th such line contains 4 integers, namely **s\[i\], e\[i\], f\[i\], r\[i\]** that describe the road as specified above.

### Output

Output is arranged into **n** blocks. The **k**'th block (1 ≤ **k** ≤ **n**) will itself contain **n** lines, each consisting of **n-1** integers.

The **j**'th number on the **i**'th line of the **k**'th block should describe the number of different ways the chef can start and end a bike tour at city **k** that crosses precisely **t** roadss and leaves the front wheel at position **F = i** and the rear wheel at position **R = j**. Each number in this output should be reduced modulo 1163962801.

### Constraints

- **1** ≤ **t** ≤ **1000000000**
- **2** ≤ **n** ≤ **22**
- **2** ≤ **m** ≤ **10000**
- **1** ≤ **s\[i\]** ≤ **n**
- **1** ≤ **t\[i\]** ≤ **n**
- **990** ≤ **0.99 f\[i\]** ≤ **r\[i\]** ≤ **f\[i\]** ≤ **10000000**
- There might be several roads between two cities
- There might be roads from a city to itself
- Subtask #1 \[10 points\]: **n** ≤ **5**, **t** ≤ **100**
- Subtask #2 \[20 points\]: **n** ≤ **5**

### Example

<pre><b>Input:</b>
3 6 6
1 2 0 0
2 1 1 1
1 3 1 2
3 1 2 1
2 3 5 5
3 2 10 10

<b>Output:</b>
1 5
0 10
1 5
1 5
0 10
1 5
1 8
0 10
1 2

</pre>### Explanation
I have discovered a truly marvellous enumeration of this, which this margin is too narrow to contain.
