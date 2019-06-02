---
category_name: school
problem_code: COUPSYS
problem_name: 'Coupon System'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 14-12-2017
tags:
    - admin2
    - cakewalk
    - gwr17rol
time:
    view_start_date: 1516482000
    submit_start_date: 1516482000
    visible_start_date: 1516482000
    end_date: 1735669800
    current: 1525198876
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef is organizing an exam for certifying algorithmic skills. The exam will consist of three levels: 1, 2 and 3, and will be organized at various cities numbered from 1 to 100.

You have received **n** coupons which give discounts for the exam. Each coupon can be applied for a particular city, for a given level and will provide a certain discount.

You want to attempt all the three levels of the exam, and you are willing to go to different cities to avail the maximum discount. So, for each level, find out the maximum discount that you can avail, and which city you'd need to go to to do so. If there are multiple such cities, choose the city that has the least number. That is, if the discounts are same, city i is preferable over city j, if i

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **n** denoting the number of coupons.
- Each of the next **n** lines contains three space-separated integers city **c**, level **l** and discount **x** applicable in the i-th coupon.

### Output

For each test case, output three lines. The first line should contain two space-separated integers: maximum discount for level 1, and the city where you can avail this discount. In case of ties, find the smallest numbered such city. Similarly, second and third line should contain similar info for second and third levels.

### Constraints

- 1 ≤ **T** ≤ 100
- 3 ≤ **n** ≤ 100
- 1 ≤ **c** ≤ 100
- 1 ≤ **l** ≤ 3
- 1 ≤ **x** ≤ 100
- It is guaranteed that for each level, there will at least one coupon.

### Example

<pre>
<b>Input</b>
1
7
2 1 10
1 1 20
3 2 100
2 3 50
2 2 100
5 3 75
100 3 75

<b>Output</b>
20 1
100 2
75 5
</pre>
### Explanation

For Level 1, there are two discount coupons, which give a discount of 10 and 20 respectively. We choose the maximum, and that is for city 1. Hence the first line of output is "20 1".

For Level 2, there are two discount coupons, both of which give a discount of 100. We choose the one which is for the city with the smaller number, and that is for city 2. Hence the second line of output is "100 2".

For Level 3, there are three discount coupons, which give discounts of 50, 75 and 75. The maximum discount is 75, and so that leaves us with two coupons to decide from. We choose the one which is for the city with the smaller number, and that is for city 5. Hence the third line of output is "75 5".
