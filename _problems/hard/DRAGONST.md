---
category_name: hard
problem_code: DRAGONST
problem_name: Dragonstone
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: stzgd
date_added: 2-08-2014
tags:
    - graph
    - kostya_by
    - lca
    - ltime15
    - medium
    - mst
    - tree
editorial_url: 'http://discuss.codechef.com/problems/DRAGONST'
time:
    view_start_date: 1409473800
    submit_start_date: 1409473800
    visible_start_date: 1409473800
    end_date: 1735669800
    current: 1493556697
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME15/mandarin/DRAGONST.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME15/russian/DRAGONST.pdf).

_Dragonstone is the name of the island located at the entrance to Blackwater Bay and the castle thereon, which was shaped from stone to look like dragons. Dragonstone was the original seat of House Targaryen in Westeros, which they had colonized and fortified as the westernmost outpost of the Valyrian Freehold._

(c) A Wiki of Ice and Fire

![](/download/extimages/5423a2b5abc2376c9e1cab20b3b68ddf.jpg)

After Robert's Rebellion(also known as the War of the Usurper), the island passed to Stannis Baratheon, who became the Lord of Dragonstone. It turned out, that there's a lot of secret chambers hidden underground the castle.

In this problem we assume, that the secret chambers can be described as **N** points on the Cartesian plane, both coordinates of which are integers. The points are indexed with integers from 1 to **N**. There's a bidirected passage between any pair of the chambers.

Let's consider two chambers **A(x1, y1)** and **B(x2, y2)**. Then it takes **|x1 - x2| + |y1 - y2|** minutes to travel through the passage, that connects chambers **A** and **B**.

The passages are extremely dark, so it isn't safe to travel through them without a lantern.

Stannis Baratheon has a very special lantern, which he's planning to use during the next **Q** trips between the secret chambers. Let's consider a single trip:

At first, Stannis chooses a chamber **S** - where he's starting the trip - and a chamber **F** - where he's finishing the trip. After that, he chooses an integer **C**, which is the _capacity_ of the lantern for the current trip. Stannis can refill the oil in his lantern at any chamber, but not passage. It means, that he cannot walk passages, that take more than **C** minutes to travel through. If **C** is too small, then there's a chance that Stannis won't be able to travel from chamber **S** to chamber **F**. On other hand, if **C** is too large, then the lantern will be quite heavy and Stannis will be exhausted by the end of the trip.

Your task is pretty simple: determine the minimal number **C** for each Stannis's trip, such that he will be able to travel from **S** to **F**.

### Note

Maybe, some of you aren't familiar with definitions from the statement. Here're some articles that could help you to understand the problem correctly:

- Cartesian plane: [http://en.wikipedia.org/wiki/Cartesian\_plane](http://en.wikipedia.org/wiki/Cartesian_plane)

### Input

The first line of the input contains an integer **T**, denoting the number of testcases. The description of **T** testcases follows.

The first line of each testcase contains an integer **N**, denoting the number of the secret chambers.

The next **N** lines contain two integers **X** and **Y** each, denoting the coordinates of the corresponding chamber.

The next line contains an integer **Q**, denoting the number of Stannis's trips between the secret chambers.

The next **Q** lines contain two integers **S** and **F** each, denoting the start and the finish chambers of the corresponding trip.

### Output

The output of each test case should contain **Q** lines, **i**'th line should contain one integer: the minimal number **C** for **i**'th Stannis's trip, such that he will be able to travel from **S** to **F**.

Do not add any newlines between different testcases.

### Constraints

- 1 ≤ **T** ≤ 4, for each input file;
- 1 ≤ **S** ≠ **F** ≤ **N**, for each testcase;
- 0 ≤ **X**, **Y** ≤ 109, for each testcase.
- Subtask 1(15 points): 1 ≤ **N** ≤ 5000, 1 ≤ **Q** ≤ 5;
- Subtask 2(15 points): 1 ≤ **N** ≤ 5000, 1 ≤ **Q** ≤ 200000;
- Subtask 3(35 points): 1 ≤ **N** ≤ 200000, 1 ≤ **Q** ≤ 5;
- Subtask 4(35 points): 1 ≤ **N** ≤ 200000, 1 ≤ **Q** ≤ 200000.

### Example

<pre><b>Input:</b>
2
4
0 0
0 1
1 0 
1 1
2
1 2
1 4
4
0 0
0 2
0 9
0 12
2
1 4
3 4


<b>Output:</b>
1
1
7
3

</pre>### Explanation
First testcase:

First trip: When **C** = 1, Stannis can use 1-2 passage and he will reach the destination;

Second trip: When **C** = 1, Stannis can use 1-2 and 2-4 passages and he will reach the destination.

Second testcase:

First trip: When **C** = 7, Stannis can use 1-2, 2-3 and 3-4 passage and he will reach the destination;

Second trip: When **C** = 3, Stannis can use 3-4 passages and he will reach the destination.
