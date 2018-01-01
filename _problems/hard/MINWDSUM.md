---
category_name: hard
problem_code: MINWDSUM
problem_name: 'Minimal Weighted Digit Sum'
languages_supported:
    - C
    - 'CPP 4.9.2'
    - CPP14
    - JAVA
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: laycurse
date_added: 9-02-2013
tags:
    - anton_lunyov
    - bfs
    - cook31
    - medium
editorial_url: 'http://discuss.codechef.com/problems/MINWDSUM'
time:
    view_start_date: 1361126651
    submit_start_date: 1361126651
    visible_start_date: 1361126539
    end_date: 1735669800
    current: 1493556779
layout: problem
---
All submissions for this problem are available.Let **M** be a fixed positive integer. Your task is for each **R** from  to **M − 1**, inclusive, find the minimal non-negative integer having residue **R** modulo **M** and having the minimal weighted digit sum.

Namely, let **W\[0\], W\[1\], ..., W\[9\]** be the sequence of weights assigned to the decimal digits. For positive integer **N** having decimal representation **D1D2...DK** the weighted digit sum of **N** is the number **WS(N) = W\[D1\] + W\[D2\] + ... + W\[DK\]**. We set **WS(0) = 0** by definition.

For each **R** from  to **M − 1**, inclusive, denote **Smin(R) = min{WS(R + K \* M) : K = 0, 1, 2, 3, ...}**. Therefore, **Smin(R)** is the minimal weighted digit sum over all non-negative integers having residue **R** modulo **M**. Next, denote by **Nmin(R)** the minimum non-negative integer having residue **R** modulo **M** and having weighted digit sum equal to **Smin(R)**. So, formally, **Nmin(R) = min{N ≥ 0 : N mod M = R, WS(N) = Smin(R)}**. Note, that **Smin(0) = Nmin(0) = 0** for any **M** and any sequence of weights.

As mentioned above, your task is for the given **M** and **W\[0\], W\[1\], ..., W\[9\]** find the sequence **Nmin(0), Nmin(1), ..., Nmin(M − 1)**. Since the output could be quite large output the following sum instead:
**F(Nmin(0)) + F(Nmin(1)) + ... + F(Nmin(M − 1))**,
where **F(0) = 0** and for positive integer **N** with decimal representation **D1D2...DK**:
**F(N) = (D1 \* 3141K−1 + D2 \* 3141K−2 + ... + DK−1 \* 3141 + DK) mod 232**./>/>/>

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains an integer **M**. The second line contains ten space separated integers **W\[0\], W\[1\], ..., W\[9\]**.

### Output

For each test case, output a single line containing the required sum.

### Constraints

- **1** ≤ **T** ≤ **3141**
- **1** ≤ **M** ≤ **3141592**
- ≤ **W\[0\], W\[1\], ..., W\[9\]** ≤ **314**
- The sum of **M** in one test file does not exceed **3141592**

### Example

<pre>
<b>Input:</b>
6
1
3 1 4 1 5 9 2 6 5 3
2
0 2 9 9 9 9 9 9 9 1
3
0 10 2 3 4 5 6 7 8 9
4
99 99 99 1 99 99 2 99 99 99
5
1 1 1 1 1 1 1 1 1 1
3141
31 41 59 26 53 58 97 93 23 0

<b>Output:</b>
0
9
6
9435
10
6500672892792

</pre>### Explanation
**Example case 1.** Here **M = 1**. So we need to find **F(Nmin(0))**. Since **Smin(0) = Nmin(0) = 0** and **F(0) = 0**, the answer is .

**Example case 2.** Here **M = 2** and **W\[0\] = 0**, **W\[1\] = 2**, **W\[9\] = 1**, while all remaining **W\[D\] = 9**. As mentioned above **Smin(0) = Nmin(0) = 0**. For **R = 1** we have **Smin(1) = 1** and **Nmin(1) = 9** since **W\[9\] = 1**. Therefore, the answer is **F(0) + F(9) = 0 + 9 = 9**.

**Example case 3.** Here values of **Smin(R)** are **{0, 4, 2}** and values of **Nmin(R)** are **{0, 4, 2}**. Therefore, the answer is **F(0) + F(4) + F(2) = 0 + 4 + 2 = 6**.

**Example case 4.** Here values of **Smin(R)** are **{0, 2, 2, 1}** and values of **Nmin(R)** are **{0, 33, 6, 3}**. Since **F(33) = (3 \* 3141 + 3) mod 232 = 9426**, the answer is **F(0) + F(33) + F(6) + F(3) = 0 + 9426 + 6 + 3 = 9435.**

**Example case 5.** Here **Smin(R) = Nmin(R) = R** for all **R** from  to **M − 1**, inclusive.

**Example case 6.** Make sure that you calculates **F(N)** properly here. Also note that **Nmin(666) = 10106 − 1** and **Nmin(3140) = 10116 − 2** for **M = 3141** and given sequence of weights. It means that brute force solution is not applicable even for such relatively small value of **M**.
