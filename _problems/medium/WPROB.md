---
category_name: medium
problem_code: WPROB
problem_name: 'The Warehouse'
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
problem_tester: furko
date_added: 24-01-2015
tags:
    - ltime21
    - medium
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/WPROB'
time:
    view_start_date: 1424594160
    submit_start_date: 1424594160
    visible_start_date: 1424593800
    end_date: 1735669800
    current: 1493557955
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME21/mandarin/WPROB.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME21/russian/WPROB.pdf).

Olya works as a warehouse keeper for a T-Shirt factory. Now the factory is facing hard times, so currently they produce only the T-shirts of three kinds: red, green and blue T-Shirts. All the T-shirts are stored in the containers, each of the containers contain the T-Shirts of a single colour.

Now there are **N** containers at the warehouse, lined up in a line. Let's enumerate the containers by the positive integers from **1** to **N**, starting from the leftmost and ending at the rightmost one. Their order is described with a string **S**. Each symbol of this string is either "r", "g" or "b" and denotes the colour of the respective T-shirts, stored in the container.

Olya likes orderliness. She is not satisfied with the fact that different kinds of containers are messed up. So she wants to rearrange the containers in such a way that the number of pairs of adjacent containers that contain the T-shirts of different colors is as minimal as possible.

For doing that, she has a special crane. The crane is capable of doing the following things:

- Take a container with the number **X** and put it in front of all the containers. This operation takes **(X-1)** seconds. Note that we are considering the 1-dimensional model of the warehouse, so "in front of all the containers" means to the left of all the containers. The warehouse is so large, so you shouldn't worry about its' size and this operation is always performable.
- Take a container with the number **X** and take some container to the left of it (say, the container number **Y**). Remove the container number **X** from its' position and insert it right after the container with the number **Y**. This operation will take **X-Y-1** seconds.
- Take a container with the number **X** and take some container to the right of it (say, the container number **Y**). Remove the container number **X** from its' position and insert it right after the container with the number **Y**. This operation will take **Y-X** seconds.

Note that after the operation, we will re-enumerate the containers from left to right by the positive integers from **1** to **N**.

Though Olya is keen on orderliness, she doesn't way to stay at the warehouse for long on Sunday. So she asks you to help her and to calculate the minimal possible number of seconds that is necessary to rearrange the containers in the desired way.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first (and only) line of each test case contains a string **S**, consisting of **N** symbols denoting the color string corresponding to the containers.

### Output

For each test case, output a single line containing the answer to the problem's question for the corresponding test case.

### Constraints

- **1** ≤ **T** ≤ **10**
- The string **S** consists only of the lower-case Latin letters from the set {r, g, b}.
- (Subtask 1): **1** ≤ **N = |S|** ≤ **7** - 33 points.
- (Subtask 2): **1** ≤ **N = |S|** ≤ **1000** - 33 points.
- (Subtask 3): **1** ≤ **N = |S|** ≤ **105** - 34 points.

### Example

<pre><b>Input:</b>
4
rgr
rrr
rgb
rgbr
<b>Output:</b>
1
0
0
2

</pre>### Explanation
**Example case 1.**We can move the second container to the beginning of the line. This will take one second.

**Example case 2.**Containers are already in desired way.

**Example case 3.**Here also, containers are already in desired way.

**Example case 4.**You can put first r to the just right of b. It will take 2 seconds to do so.
