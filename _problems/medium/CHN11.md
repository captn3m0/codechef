---
category_name: medium
problem_code: CHN11
problem_name: 'Animesh has a war with tribal leader Malvika'
languages_supported:
    - C
    - CPP14
    - JAVA
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 16-01-2016
tags:
    - acm15chn
    - admin2
    - combinatorics
    - sorting
time:
    view_start_date: 1453546800
    submit_start_date: 1453546800
    visible_start_date: 1453546800
    end_date: 1735669800
    current: 1493557565
layout: problem
---
All submissions for this problem are available.Malvika is the leader of a large tribal army, with soldiers from multiple tribes. There are a total of **n** soldiers in the army. You are given an array **a** of length **n**, where **a\[i\]** denotes the tribe number of the **i**th soldier.

Now Animesh, the leader of the neighboring tribe and staunch enemy of Malvika, has attacked her army and declared a war which would later be regarded as the greatest tribal war of the contemporary world. For this soon-to-be-lengendry war, Malvika wanted to evaluate the strength of her army. Malvika's army's strength is based on love, i.e., the pairwise strength of two people from the different tribes would be zero, while for those from the same tribe, it will be the distance between their positions in the line. The more the distance, the lonelier they feel. The lonelier they feel, the more they love each other. As their love grows, so does the strength of the army.

Formally, strength of an army denoted by an array **a** will be the sum of pairwise strengths of each pair of people from the same tribe, i.e. sum of all **|i - j|** for **1 ≤ i ≤ j ≤ n** such that **a\[i\] = a\[j\]**.

Malvika wants to rearrange her army to maximize the strength. Let **M** denote the maximum strength of her army after rearranging the soldiers. You have to help her find out the number of rearrangements of her army having the maximum strength. The more the rearrangements are, there are more chances of her winning the battle. As they say, you can win the battle with a lot of strength, but you need rearrangements of that strength to win the war. Since the battle is expected to be long drawn, the answer could be very large. So, print your answer modulo **109 + 7**.

Two arrangements of the army — **A** and **B** — are said to be distinct if there is an index **i** from **1** to **n**, such that **A\[i\] ≠ B\[i\]**. That is, if some position in the army is occupied by soldiers from different tribes in the two arrangements.

### Input

- The first line of input contains a single integer **T** denoting the number of test cases.
- The first line of each test case contains a single integer **n** as defined in the statement.
- The second line of each test case will contain **n** space separated integers denoting the array **a**.

### Output

- For each test case, output a single integer in a line corresponding to the answer of the problem.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **n** ≤ **105**
- **1** ≤ **a\[i\]** ≤ **109**

### Example

<pre><b>Input:</b>
3
2
1 2
4
1 2 2 1
3
1 1 2

<b>Output:</b>
2
4
1
</pre>### Explanation

**In the first example**, the strength of the army is zero irrespective of the way she arranges her army. There are two ways of arranging the army, namely {1, 2} and {2, 1}.

**In the second example**, she can arrange a maximum strength army in four ways. Those are {1, 2, 1, 2}, {1, 2, 2, 1}, {2, 1, 1, 2}, {2, 1, 2, 1}. Strength of her army in all the four cases will be 4, the maximum possible strength of the army that she can get.
