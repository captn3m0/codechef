---
{"category_name":"medium","problem_code":"PARTN01","problem_name":"Even Odd Partition","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"21-06-2021","tags":{"0":"admin3","1":"berlekamp","2":"july21","3":"medium"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/PARTN01","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PARTN01","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/PARTN01.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/PARTN01.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/PARTN01.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/PARTN01.pdf) as well.

Let $f(n)$ be the number of ways to partition the array $[1, 2, 3, \ldots, n]$ into contiguous subarrays such that every pair of adjacent subarrays in the partition have sums of different parity.

<details>
    <summary>What is a contiguous subarray?</summary>
    A contiguous subarray of an array $A$ is an array that can be obtained by deleting some (possibly none) elements from the front of $A$ and some (possibly none) elements from the end of $A$. The subarrays of an array $A$ ($1$-indexed) of size $n$ are given by $[A_{i}, A_{i+1}, \ldots, A_j]$ for each pair of integers $(i, j)$ such that $1\leq i \leq j \leq n$.
</details>


<details>
    <summary>What is a partition of an array into contiguous subarrays?</summary>
    A partition of the array $A$ into contiguous subarrays is a set of subarrays of $A$, $\{S_1, S_2, S_3, \ldots, S_k\}$, such that every element of the array belongs to exactly one of the subarrays $S_1, S_2, \ldots, S_k$.
</details>

<details>
    <summary>Which partitions are counted in $f(n)$?</summary>
    Consider a partition $\{S_1, S_2, \ldots, S_k\}$ of the array $[1, 2, \ldots, n]$, where $S_i$ are in sorted order, i.e. every element in $S_i$ is smaller than every element in $S_{j}$ for all $i\lt j$. Then $f(n)$ is the number of partitions such that $\texttt{sum}(S_{i}) \not\equiv \texttt{sum}(S_{i+1}) \pmod{2} $ for all $1 \leq i \lt k$. $\texttt{sum}(S_{i})$ is the sum of all elements in $S_i$.
</details>

Let $S_0(n) = f(n)$ and $S_{k+1}(n) = S_k(1) + S_k(2) + S_k(3) + \cdots + S_k(n)$ for $k \geq 0$.  
Given $n$ and $k$, find $S_k(n) \bmod 998\ 244\ 353$.

### Input

- The first line contains a single integer $T$, the number of test cases.
- The first and only line of each test case contains two integers $n$, $k$.

### Output

- For each test case print in a separate line, the value of $S_k(n) \bmod 998\ 244\ 353$.

### Constraints

- $1\leq T\leq 3000$
- $0\leq k\leq 3000$
- $1 \leq n \leq 10^{18}$
- The sum of $k$ over all test cases does not exceed $3000$.

### Subtasks

- **Subtask #1 (1 point):**
    - $n \leq 20$
    - The time limit for this subtask is 1 second.

- **Subtask #2 (4 points):**
    - $n \leq 1000$ (Time limit : 1 sec)
    - The time limit for this subtask is 1 second.

- **Subtask #3 (10 points):**
    - $n \leq 10^6$ 
    - $k = 0$ for all test cases. 
    - The time limit for this subtask is 2 seconds.

- **Subtask #4 (20 points):**
    - The sum of $k$ is at most $100$.
    - The time limit for this subtask is 2 seconds.

- **Subtask #5 (25 points):**
    - The sum of $k$ is at most $3000$.
    - $k \leq 100$ and is same for all test cases.
    - The time limit for this subtask is 2 seconds.

- **Subtask #6 (40 points):** 
    - Original constraints
    - The time limit for this subtask is 2 seconds.

### Sample Input
```
12
1 0
2 0
3 0
4 0
5 0
2 1
2 2
3 3
4 4
5 5
1000000000000000000 200
1000000000000000000 2773
```

### Sample Output
```
1
2
2
3
6
3
4
14
51
191
13413678
697825985
```

### Explanation

We first find $f(n)$ for $n = 1, 2, 3, 4, 5$.

When $n = 1$, there is only one partition $[1]$. Since there is only one subarray, there are no adjacent subarrays in this partition and hence should be counted in $f(1)$, therefore $f(1) = 1$.

When $n = 2$, there are $2$ partitions possible, $[1, 2]$ and $[1], [2]$. The first partition has no adjacent subarrays and so is counted in $f(2)$.  
The second partition has sums $1, 2$ which are alternating in parity and so is also counted in $f(2)$, therefore $f(2) = 2$.

When $n = 3$, there are $4$ partitions possible. The partitions are shown below.

<!-- |  Partition  | Sum of subarrays | Are the sum of subarrays alternating in parity ? |
| ------------|-------------------|---------------------------------------------------|
| $[1, 2, 3]$ |$\{6\}$|Yes|
| $[1], [2, 3]$|$\{1, 5\}$|No|
| $[1, 2], [3]$|$\{3, 3\}$|No|
| $[1], [2], [3]$|$\{1, 2, 3\}$|Yes| -->

<table>
<thead>
<tr>
<th>Partition</th>
<th>Sum of subarrays</th>
<th>Are the sum of subarrays alternating in parity ?</th>
</tr>
</thead>
<tbody>
<tr>
<td>[1, 2, 3]</td>
<td>{6}</td>
<td>Yes</td>
</tr>
<tr>
<td>[1], [2, 3]</td>
<td>{1, 5}</td>
<td>No</td>
</tr>
<tr>
<td>[1, 2], [3]</td>
<td>{3, 3}</td>
<td>No</td>
</tr>
<tr>
<td>[1], [2], [3]</td>
<td>{1, 2, 3}</td>
<td>Yes</td>
</tr>
</tbody>
</table>

There are in total $2$ partitions whose subarrays sums are alternating in parity, therefore $f(3) = 2$

When $n = 4$, there are $8$ partitions. The partitions are shown below.


<!-- |  Partition  | Sum of subarrays | Are the sum of subarrays alternating in parity ? |
| ------------|-------------------|---------------------------------------------------|
| [1, 2, 3, 4] |\{10\}|Yes|
| [1], [2, 3, 4]|\{1, 9\}|No|
| [1, 2], [3, 4]|\{3, 7\}|No|
| [1], [2], [3, 4]|\{1, 2, 7\}|Yes|
| [1, 2, 3], [4] |\{6, 4\}|No|
| [1], [2, 3], [4]|\{1, 5, 4\}|No|
| [1, 2], [3], [4]|\{3, 3, 4\}|No|
| [1], [2], [3], [4]|\{1, 2, 3, 4\}|Yes| -->

<table>
<thead>
<tr>
<th>Partition</th>
<th>Sum of subarrays</th>
<th>Are the sum of subarrays alternating in parity ?</th>
</tr>
</thead>
<tbody>
<tr>
<td>[1, 2, 3, 4]</td>
<td>{10}</td>
<td>Yes</td>
</tr>
<tr>
<td>[1], [2, 3, 4]</td>
<td>{1, 9}</td>
<td>No</td>
</tr>
<tr>
<td>[1, 2], [3, 4]</td>
<td>{3, 7}</td>
<td>No</td>
</tr>
<tr>
<td>[1], [2], [3, 4]</td>
<td>{1, 2, 7}</td>
<td>Yes</td>
</tr>
<tr>
<td>[1, 2, 3], [4]</td>
<td>{6, 4}</td>
<td>No</td>
</tr>
<tr>
<td>[1], [2, 3], [4]</td>
<td>{1, 5, 4}</td>
<td>No</td>
</tr>
<tr>
<td>[1, 2], [3], [4]</td>
<td>{3, 3, 4}</td>
<td>No</td>
</tr>
<tr>
<td>[1], [2], [3], [4]</td>
<td>{1, 2, 3, 4}</td>
<td>Yes</td>
</tr>
</tbody>
</table>


There are in total $2$ partitions whose subarrays sums are alternating in parity, therefore $f(3) = 2$

When $n = 5$, there are in total $16$ partitions. The partitions are shown below.


<!-- |  Partition  | Sum of subarrays | Are the sum of subarrays alternating in parity ? |
| ------------|-------------------|---------------------------------------------------|
| [1, 2, 3, 4, 5] |\{15\}|Yes|
| [1], [2, 3, 4, 5]|\{1, 14\}|Yes|
| [1, 2], [3, 4, 5]|\{3, 12\}|Yes|
| [1], [2], [3, 4, 5]|\{1, 2, 12\}|No|
| [1, 2, 3], [4, 5] |\{6, 9\}|Yes|
| [1], [2, 3], [4, 5]|\{1, 5, 9\}|No|
| [1, 2], [3], [4, 5]|\{3, 3, 9\}|No|
| [1], [2], [3], [4, 5]|\{1, 2, 3, 9\}|No|
| [1, 2, 3, 4], [5] |\{10, 5\}|Yes|
| [1], [2, 3, 4], [5]|\{1, 9, 5\}|No|
| [1, 2], [3, 4], [5]|\{3, 7, 5\}|No|
| [1], [2], [3, 4],[5]|\{1, 2, 7, 5\}|No|
| [1, 2, 3], [4], [5] |\{6, 4, 5\}|No|
| [1], [2, 3], [4], [5]|\{1, 5, 4, 5\}|No|
| [1, 2], [3], [4], [5]|\{3, 3, 4, 5\}|No|
| [1], [2], [3], [4], [5]|\{1, 2, 3, 4, 5\}|Yes| -->

<table>
<thead>
<tr>
<th>Partition</th>
<th>Sum of subarrays</th>
<th>Are the sum of subarrays alternating in parity ?</th>
</tr>
</thead>
<tbody>
<tr>
<td>[1, 2, 3, 4, 5]</td>
<td>{15}</td>
<td>Yes</td>
</tr>
<tr>
<td>[1], [2, 3, 4, 5]</td>
<td>{1, 14}</td>
<td>Yes</td>
</tr>
<tr>
<td>[1, 2], [3, 4, 5]</td>
<td>{3, 12}</td>
<td>Yes</td>
</tr>
<tr>
<td>[1], [2], [3, 4, 5]</td>
<td>{1, 2, 12}</td>
<td>No</td>
</tr>
<tr>
<td>[1, 2, 3], [4, 5]</td>
<td>{6, 9}</td>
<td>Yes</td>
</tr>
<tr>
<td>[1], [2, 3], [4, 5]</td>
<td>{1, 5, 9}</td>
<td>No</td>
</tr>
<tr>
<td>[1, 2], [3], [4, 5]</td>
<td>{3, 3, 9}</td>
<td>No</td>
</tr>
<tr>
<td>[1], [2], [3], [4, 5]</td>
<td>{1, 2, 3, 9}</td>
<td>No</td>
</tr>
<tr>
<td>[1, 2, 3, 4], [5]</td>
<td>{10, 5}</td>
<td>Yes</td>
</tr>
<tr>
<td>[1], [2, 3, 4], [5]</td>
<td>{1, 9, 5}</td>
<td>No</td>
</tr>
<tr>
<td>[1, 2], [3, 4], [5]</td>
<td>{3, 7, 5}</td>
<td>No</td>
</tr>
<tr>
<td>[1], [2], [3, 4],[5]</td>
<td>{1, 2, 7, 5}</td>
<td>No</td>
</tr>
<tr>
<td>[1, 2, 3], [4], [5]</td>
<td>{6, 4, 5}</td>
<td>No</td>
</tr>
<tr>
<td>[1], [2, 3], [4], [5]</td>
<td>{1, 5, 4, 5}</td>
<td>No</td>
</tr>
<tr>
<td>[1, 2], [3], [4], [5]</td>
<td>{3, 3, 4, 5}</td>
<td>No</td>
</tr>
<tr>
<td>[1], [2], [3], [4], [5]</td>
<td>{1, 2, 3, 4, 5}</td>
<td>Yes</td>
</tr>
</tbody>
</table>


There are in total $6$ partitions whose subarray sums are alternating in parity, therefore $f(5) = 6$

$S_0(n) = f(n)$ and is found as described above.

To find $S_1(n), S_2(n), \ldots$, the given formula $S_{k+1}(n) = S_k(1) + S_k(2) + \cdots + S_k(n)$ is used.  
For example $S_1(n) = S_0(1) + S_0(2) + \cdots + S_0(n)$.

The values for $S_k(n)$ for $k \leq 5$ and $n \leq 5$ are tabulated below.

<!-- | n | S_0(n) | S_1(n) | S_2(n) | S_3(n) | S_4(n) | S_5(n) |
|---|-----|-----|-----|-----|-----|-----|
| 1 |  1  | 1 | 1 | 1 | 1 | 1 |
| 2 |  2  | 3 | 4 | 5 | 6 | 7 |
| 3 |  2  | 5 | 9 |14 |20 |27 |
| 4 |  3  | 8 |17 |31 |51 |78 |
| 5 |  6  |14 |31 |62 |113|191| -->

<table>
<thead>
<tr>
<th>n</th>
<th>S<sub>0</sub>(n)</th>
<th>S<sub>1</sub>(n)</th>
<th>S<sub>2</sub>(n)</th>
<th>S<sub>3</sub>(n)</th>
<th>S<sub>4</sub>(n)</th>
<th>S<sub>5</sub>(n)</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td>2</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>6</td>
<td>7</td>
</tr>
<tr>
<td>3</td>
<td>2</td>
<td>5</td>
<td>9</td>
<td>14</td>
<td>20</td>
<td>27</td>
</tr>
<tr>
<td>4</td>
<td>3</td>
<td>8</td>
<td>17</td>
<td>31</td>
<td>51</td>
<td>78</td>
</tr>
<tr>
<td>5</td>
<td>6</td>
<td>14</td>
<td>31</td>
<td>62</td>
<td>113</td>
<td>191</td>
</tr>
</tbody>
</table>


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>