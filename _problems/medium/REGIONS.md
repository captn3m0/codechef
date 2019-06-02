---
category_name: medium
problem_code: REGIONS
problem_name: 'Dividing into Regions'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: 'kevinsogo,xcwgf666'
date_added: 8-06-2016
tags:
    - bfs
    - dfs
    - memoization
    - snckpb16
    - tree
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/REGIONS'
time:
    view_start_date: 1465831800
    submit_start_date: 1465831800
    visible_start_date: 1465831800
    end_date: 1735669800
    current: 1493557875
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB16/mandarin/REGIONS.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB16/russian/REGIONS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB16/vietnamese/REGIONS.pdf) as well.

ChefLand develops very fast. Recently, there were a few new cities built, so the total number of cities in ChefLand have become **N**.

In order to communicate, the cities are connected with **N-1** bidirectional roads in such a way that there is exactly one way to get from one city to another. In other words, the graph with cities as nodes and roads as edges is a tree.

Now, the King of ChefLand thinks that the country is too big to be ruled by one person, so he decided to split in two parts, each of which will be ruled by one of two his sons. The split should be made by blocking one road. After doing that, there will be two connected parts which will be ruled by sons.

However, not every division is good. In some cases, one of the parts will still be very large, thus, it will be very hard for some of the sons to rule it. So, for every connected part, there's a value called **inconvenience**. The inconvenience of the part equals to the distance between two most distance cities belonging to this part.

So for every split, there are two **inconvenience** values that should be calculated. Please help the King to find them!

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

In order not to make this problem I/O related, we will give you the road system in the compressed form. The first and only line of the test case will contain six space-separated integers **N, A, B, C, D, E** with the following meaning:

- The road system contains **N** cities and **N-1** roads.
- The **i**th road (1-indexed) connects the cities with the numbers **i+1** and **((A + B \* (i - 1)) % i) + 1** and has the length equal to **(C \* i + D) % E**.

It is guaranteed that the road system, generated this way will be connected. ### Output

In order not to make this problem I/O-related, we will ask you the hash function of the answer to each test case.

The hash function is calculated this way:

16. First, an 1-indexed sequence **Q** of **2(N-1)** answers is created.
17. The **(2\*i-1)**th term of this sequence is the smallest of the inconvenience values after removing the **i**th edge.
18. The **(2\*i)**th term of this sequence is the greatest of the inconvenience values after removing the **i**th edge.
19. Then, the value of the hash function is a sum of **Qi \* (1000000 + 3)i-1**, modulo **109+7**.
### Constraints

- **1** ≤ **T** ≤ **105**
- **2** ≤ **N**, sum of **N** ≤ **5 × 106**
- 0 ≤ **A, B, C, D** ≤ **104**
- **2** ≤ **E** ≤ **200**

### Example

<pre><b>Input:</b>
<tt>2
5 1 2 3 4 5
89 189 111 34 7 200</tt>

<b>Output:</b>
<tt>99116027
515191750</tt>
</pre>
### Explanation

**Example case 1.** The roads are:

- Road connecting cities **1** and **2** with length **2**;
- Road connecting cities **2** and **3** with length 0;
- Road connecting cities **3** and **4** with length **3**;
- Road connecting cities **4** and **5** with length **1**.

If we remove the first road, then the inconveniences of the parts will be equal to 0 and **4**. So **Q1 = 0, Q2 = 4**.

If we remove the second road, the inconveniences will be equal to **2** and **4**. So **Q3 = 2, Q4 = 4**.

If we remove the third road, the inconveniences will be equal to **2** and **1**. So **Q5 = 1, Q6 = 2**.

If we remove the fourth road, the inconveniences will be equal to **5** and 0. So **Q7 = 0, Q8 = 5**.

So, we've obtained the sequence **Q = (0, 4, 2, 4, 1, 2, 0, 5)**.

By calculating the hash function, we get **0 × 10000030+4 × 10000031+2 × 10000032+4 × 10000033+1 × 10000034+2 × 10000035+0 × 10000036+5 × 10000037 mod (109+7)= 5000105000947004756014371026147026557011640 mod (109+7) = 99116027**

**Example case 2.** This is just a big test case, so that you could check your solution better.
