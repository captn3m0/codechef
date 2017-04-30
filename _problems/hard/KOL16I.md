---
category_name: hard
problem_code: KOL16I
problem_name: Roads
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: null
date_added: 26-12-2016
tags:
    - kevinsogo
time:
    view_start_date: 1482831600
    submit_start_date: 1482831600
    visible_start_date: 1482831600
    end_date: 1735669800
    current: 1493556745
layout: problem
---
All submissions for this problem are available.Sarah is an engineer assigned to build roads between the **N** towns of Evoland. Towns are assigned IDs from **1** to **N**. A road connects exactly one pair of towns, and is bidirectional.

The mayor of Evoland allocated a very small budget for this project. Thus, Sarah is forced to build _as few roads as possible_ while still keeping all **N** towns connected via roads. Note that this is an **absolute requirement**; any network not satisfying this will not be accepted by the mayor.

On top of this absolute requirement, Sarah still can't just build the roads however she wants. She has to consider the visiting habits of tourists, who are very picky with which towns they visit. She found out that tourists don't visit towns which are "too similar".

For example, consider **N = 4** towns. Suppose Sarah builds three roads connecting the pairs of towns **(1, 2)**, **(2, 3)** and **(2, 4)**. Then as you can see, town **2** will be the busiest town because all towns are adjacent to it by a single road. On the other hand, from the point of view of the roads, towns **1**, **3** and **4** will be pretty much the same, so tourists will tend to visit only one of them.

Sarah has formalized this notion of "sameness" of towns. For a given network of roads, she defines two towns **a** and **b** to be **indistinguishable** if there exists a permutation of the towns **\[p1, p2, p3, ..., pN\]** such that **pa = b**, and for every pair of nodes **(i, j)**, there is a road between **(i, j)** if and only if there is a road between **(pi, pj)**.

On the other hand, Sarah calls a pair of towns **distinguishable** if they are not indistinguishable. (Unsurprisingly.)

She also defined the **attractiveness** of the network of roads as the size of the largest set of towns that are pairwise distinguishable from each other. For example, the network above has an attractiveness of **2**, because there are at most two distinguishable towns.

Sarah's goal is to build the roads in such a way that the attractiveness becomes exactly **A**. Can you help her achieve this by coming up with the road plan?

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case consists of a single line containing two integers **N** and **A** separated by a space.

### Output

For each test case, first output **R** in a single line. **R** denotes the number of roads to build. Then, output **R** lines, each containing two integers **i** and **j**, meaning that a road exists between **i** and **j**. There can be multiple possible correct outputs; any one will be accepted.

If it's not possible to make such a network of roads at all, just output **-1** in a single line.

### Constraints

- **1 ≤ T, A, N ≤ 300**

### Example

```
<b>Input:</b>
<tt>2
4 2
5 234
</tt>
<b>Output:</b>
<tt>3
1 2
2 3
2 4
-1</tt>

```
### Explanation

The first case corresponds to the network described in the problem statement. In the second case, it is impossible to find a network for **5** towns such that the attractiveness is equal to **234**, so we output **-1**.