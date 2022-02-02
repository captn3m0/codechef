---
category_name: medium
problem_code: CRYPCUR
problem_name: 'Crypto Trading'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: wittyceaser
problem_tester: null
date_added: 23-12-2017
tags:
    - wittyceaser
time:
    view_start_date: 1517693400
    submit_start_date: 1517693400
    visible_start_date: 1517693400
    end_date: 1735669800
    current: 1525198953
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.AMRExchange is the latest cryptocurrency exchange that has become very popular among cryptocurrency traders.

On AMRExchange, there are **N** cryptocurrencies - let us denote the ith currency by **Ci**. **M** pairs of these cryptocurrencies are tradable - one unit of currency **Cx** can be converted to one unit of currency **Cy** with risk **Cxy**.

Mr. X, an avid cryptocurrency collector, wants to start with 1 unit of **any** of the **N** cryptocurrencies and perform a sequence of trades. He wants to do it in such a way that for each of the **N** cryptocurrencies, there was at least one point during the trading sequence during which he held one unit of that cryptocurrency.

The overall risk of the sequence of trades is the **maximum risk** in the sequence of trades. Minimize the overall risk with which Mr. X can achieve this. Print "Impossible" if no such sequence of trades is possible.

### Input

- The first line contains a single integer **T** - the total number of testcases.
- Each testcase is of the following format: 
    - First line contains 2 space-separated integers - **N** and **M**. **N** denotes the number of cryptocurrencies, **M** denotes the number of tradable ordered cryptocurrency pairs.
    - **M** lines follow. Each line contains 3 space-separated positive integers - **Cx**, **Cy** and **Cxy**. This line denotes that one unit of currency **Cx** can be converted into one unit of currency **Cy** with risk **Cxy**.

### Output

- For each testcase, print the minimum overall risk with which Mr. X can own at least one unit of each cryptocurrency at some point in time.
- If it is not possible for Mr. X to achieve this, then print “Impossible”.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N**, **M** ≤ 105
- 1 ≤ **Cx**, **Cy** ≤ **N**
- 1 ≤ **Cxy** ≤ 109

### Example

<pre>
<b>Input</b>
2
3 6
1 2 1
2 3 3
3 1 3
1 3 1
3 2 1
3 2 5
4 3
1 2 1
2 3 1
2 4 1

<b>Output</b>
1
Impossible
</pre>
### Explanation

**Testcase 1**: Mr. X can start with cryptocurrency **C1** and follow the following sequence to minimize overall risk:

- Convert **C1** to **C3** with risk 1.
- Convert **C3** to **C2** with risk 1.

 The overall risk would be 1.

**Testcase 2**: There are a total of 6 sequences of trades are possible, and none of them satisfy our property. We list them here:

 Starting with **C1**:

- **C1** -&gt; **C2** -&gt; **C3**
- **C1** -&gt; **C2** -&gt; **C4**

 In the first sequence, Mr. X won't be able to own **C4** because units of **C3** cannot be converted to units of **C4**. Similarly, in the second sequence, Mr. X won't be able to own **C3** because units of **C4** cannot be converted to units of **C3**.

 Starting with **C2**:

- **C2** -&gt; **C3**
- **C2** -&gt; **C4**

Starting with **C3**:

- **C3** (cannot be converted to any other cryptocurrency)

Starting with **C4**:

- **C4** (cannot be converted to any other cryptocurrency)

Hence, there is no possible sequence using which Mr. X can own one unit of all cryptocurrencies at some point in time.
