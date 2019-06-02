---
category_name: medium
problem_code: AMR15B
problem_name: Devasena
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: suh_ash2008
problem_tester: null
date_added: 10-10-2015
tags:
    - acmamr15
    - medium
    - number
    - suh_ash2008
editorial_url: 'http://discuss.codechef.com/problems/AMR15B'
time:
    view_start_date: 1453401000
    submit_start_date: 1453401000
    visible_start_date: 1453401000
    end_date: 1735669800
    current: 1493557447
layout: problem
---
All submissions for this problem are available.Devasena was the princess of an unknown kingdom (we'll all know which one, in Baahubali 2 ;) ), and her father arranged for a <a herf="https://en.wikipedia.org/wiki/Swayamvara">Swayamvara</a> to get her married. He gave all of them a question, and the question was so hard that nobody was able to answer it (Yes you guessed it right, both Baahubali and Bhallaladeva were not present there for the Swayamvara). We all know that Amarendra Baahubali married her later and as a consequence of so many things, she was imprisoned for 25 years. Who knows, if someone else had answered the question that day, then she would have got married to him and things could have been different. Phew! But the bad part, we wouldn't have had the story of Baahubali. :)

Although everything is history now, recently archaeologists discovered the secret question that was asked at the Swayamvara, and you think - "Well, it's such a simple question. I could use a computer to solve it!". The question goes as follows:

You are given **N** integers (not necessarily distinct) => **A1, A2, A3, ..., AN**. There are **2N** possible subsets (including the empty subset). The **GCD** of a subset is defined as the greatest common divisor of all the integers in that subset. You need to find the product of the **GCDs** of all the **2N** possible subsets you can construct from **A**. Since the answer can be large, you need to output the answer modulo **1000000007**. Do you think you can solve this question?

**Note**: The greatest common divisor of an empty subset is **1**. To know more about the definition of greatest common divisor, check [here](https://en.wikipedia.org/wiki/Greatest_common_divisor).

### Input

The first line of input consists of a single integer **T** denoting the number of test cases. The description of **T** test cases follow. The first line of each test case consists of a single integer **N**. The second line of each test case consists of **N** space separated integers **A1, A2, ..., AN**

### Output

For each test case, output an single integer on a separate line denoting the answer for that test case. Note that you need to output all the values modulo  **1000000007 (109 + 7)**.

### Constraints

- **1** ≤ **T** ≤ **30**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **Ai** ≤ **105**

### Example

<pre><b>Input:</b>
3
1
1
2
1 2
3
1 2 2

<b>Output:</b>
1
2
8
</pre>
### Explanation

**For the first test case**, **N = 1**, and **A = \[1\]**. There are 2 possible subsets => **{}, {1}** and both have a gcd of 1. Hence, the answer is 1 \* 1 = **1**.

**For the second test case**, **N = 2**, and **A = \[1, 2\]**. There are 4 possible subsets => **{}, {1}, {2}, {1, 2}**, having a gcd of 1, 1, 2 and 1 respectively. Hence, the answer is 1 \* 1 \* 2 \* 1 = **2**.

**For the third test case**, **N = 3**, and **A = \[1, 2, 2\]**. There are 8 possible subsets => **{}, {1}, {2}, {2}, {1, 2}, {2, 2}, {1, 2}, {1, 2, 2}**, having a gcd of 1, 1, 2, 2, 1, 2, 1, 1. Hence, the answer is 1 \* 1 \* 2 \* 2 \* 1 \* 2 \* 1 \* 1 = **8**.
