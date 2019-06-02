---
category_name: easy
problem_code: KOL16F
problem_name: 'Precious Stones'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kol_adm
problem_tester: null
date_added: 21-12-2016
tags:
    - kol_adm
time:
    view_start_date: 1482831600
    submit_start_date: 1482831600
    visible_start_date: 1482831600
    end_date: 1735669800
    current: 1493558158
layout: problem
---
All submissions for this problem are available.Nemo went to the shop to buy a chain for his girlfriend. The shopkeeper has shown him a chain made of some expensive stones. The chain has **n** stones marked from 0 to **n-1**. The **ith** stone is connected with **((i+1)%n)th** stone for each **0 ≤ i < n**. Each stone can be either Ruby or Amber.

Nemo defines beauty factor **B** of a chain as the maximum number of consecutive stones of same type.

![](https://www.codechef.com/download/upload/ACM16KOL/F.png)In the chain above, the beauty factor is **B = 4** because there are **4** consecutive Amber in the chain.

Nemo wants to chose **exactly one** stone **i** and exchange it with a stone with different type. So if the **ith** stone is ruby, Nemo will exchange it with Amber and vice-versa. He wants to do it in such a way that the value **B** is as small as possible.

Given the configuration of the chain, can you find the minimum value of **B** that Nemo can get after exchanging **exactly one** stone? Note that, It’s not allowed to change positions of the stones, the new stone must be placed in the same position as the original stone.

### Input

First line contains number of test cases **T (1 ≤ T ≤ 2500)**. For each test cases, there is a single line containing a string **S (1 ≤ |S| ≤ 105)** denoting the chain. Here |S| denotes the length or number of characters in the string. The string is made of only **’R’** (Ruby) and **’A’** (Amber). Total number of characters in the input file will be less than **5 x 106**.

### Output

For each test case, print the case number and the answer in a single line. Look at the output for sample input for details.

### Sample

 ```
<b>Input</b>
<p>2
RRRAAAARAA
ARRRRAAA
</p>
<b>Output for Sample Input</b>
<p>Case 1: 3
Case 2: 4
</p>
<pre>
### Explanation:

Case **1** represents the figure in the problem statement. Nemo can exchange one Amber with a Ruby and reduce **B** to **3**.

![](https://www.codechef.com/download/upload/ACM16KOL/F2.png)
