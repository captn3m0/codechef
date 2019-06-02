---
category_name: medium
problem_code: CODIE
problem_name: 'Codie Bird'
languages_supported:
    - C
    - CPP14
    - JAVA
    - kotlin
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sidhant007
problem_tester: null
date_added: 1-12-2017
tags:
    - acm17chn
    - chn17rol
    - expected
    - matrix
    - med
    - sidhant007
editorial_url: 'https://discuss.codechef.com/problems/CODIE'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525198951
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Codie is a super intelligent bird stuck inside a flappy bird simulation. The game is simple: if the position of the bird is denoted by **(x, y)**, then the bird can move in the following directions in one step:

- right — to **(x + 1, y)**,
- up-right — to **(x + 1, y + 1)**,
- down-right — to **(x + 1, y - 1)**.

The screen has width **K** and you are **not allowed** to move outside of the screen, i.e. the position of the bird must satisfy 1 ≤ **y** ≤ **K** at each moment.

![Animation for flappy bird game](https://discuss.codechef.com/upfiles/giphy.gif)
Codie is moving from **(1, K/2)** to **(N, K/2)**. However, there is exactly one obstacle in the simulation. This obstacle occurs at a random **x**-coordinate between **2** and **N - 1** (both inclusive), where each **x** has equal probability. The obstacle is composed of **two** vertical pipes. One of them is at the top and covers all **y**-coordinates between **b** and **K** (both inclusive). The other one is at the bottom and covers all **y**-coordinates between 1 and **a** (both inclusive). The pipes only allow Codie to move through **y**-coordinates that are **≥ a+1** and **≤ b-1** at this particular **x**-coordinate.

Codie, being a super smart and geeky bird, is interested in finding the expected number of paths from **(1, K/2)** to **(N, K/2)**. Help Codie find the answer!

Specifically, let's assume that the expected number of paths is a fraction of the form **P / Q**, where **P** and **Q** are coprime. Let **Q-1** be the multiplicative inverse of **Q** modulo 109 + 7. Compute **P · Q-1 modulo 109 + 7**.

### Input

The only line of the input contains four space-separated integers **N**, **K**, **a** and **b** denoting the final **x**-coordinate, the width of the screen, the highest coordinate blocked by the bottom pipe and the lowest coordinate blocked by the top pipe.

### Output

Print a single line containing one integer — the expected number of paths from **(1, K/2)** to **(N, K/2)** modulo 109 + 7.

### Constraints

- 3 ≤ **N** ≤ 109
- 2 ≤ **K** ≤ 50
- **K** is even
- 1 ≤ **a** < **b** ≤ **K**

### Example

<pre><b>Input:</b>

5 4 1 3

<b>Output:</b>

666666679
</pre>
### Explanation

Let **X** denote the starting and ending coordinate, and **B** denote the cells blocked by pipes.

![](https://discuss.codechef.com/upfiles/codie_explain_RFTTQft.png)

The expected value is (7 · 1/3) + (9 · 1/3) + (7 · 1/3) = 23/3 = 666666679 (modulo 109 + 7).
