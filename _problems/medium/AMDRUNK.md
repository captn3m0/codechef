---
category_name: medium
problem_code: AMDRUNK
problem_name: 'Drunk Man in Large City'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: balajiganapath
problem_tester: null
date_added: 21-12-2017
tags:
    - balajiganapath
time:
    view_start_date: 1517693400
    submit_start_date: 1517693400
    visible_start_date: 1517693400
    end_date: 1735669800
    current: 1525198948
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.A city consists of **n** junctions that are connected by **m** bidirectional roads. The junctions are numbered from 1 to **n**. It is known that each junction has at least two roads incident on it. Also, one can walk from any junction to any other junction using these roads. Moreover, no pair of junctions is connected by more than one road.

A very drunk man has just walked out of a bar which is situated at junction **s** and wants to get to his home which is located at junction **t**. His current junction is **s**. In every minute the following happens:

- Step 1: He rationally thinks and chooses one of the roads incident on the current junction and walks along this road.
- Step 2: If he reaches the junction **t**, he immediately gets home and goes to sleep.
- Step 3: Otherwise, influenced by the desire for adventure, he picks some random road incident on the current junction and walks along this road. The only limitation is that he never picks the road he used to get to this junction at the beginning of the current minute (ie. in Step 1 of this minute).
- Step 4: Now, if he has reached junction **t**, he sees his home and goes there directly and sleeps.
- Step 5: If not, then we go to the next minute, and this repeats.

Given a description of the city and indices of junctions **s** and **t** you have to compute whether the drunk man will surely get home in a finite number of minutes, if he makes optimal choices in all the Step 1's. If so, what is the minimum number of minutes **x**, such that the man can get home in no more than **x** minutes whatever his random choices at step 3 of each minute are. That is, what is the minimum **x**, such that there is a strategy which the man can follow in his Step 1 choices, so that no matter what adversarial choice he makes in the Step 3's, he is guaranteed to reach his home within **x** minutes?

### Input

- The first line of the input contains a single integer **T** — the number of test cases in this input. Then follow **T** descriptions of individual test cases.
- The first line of the input contains four integers **n**, **m**, **s** and **t** — the number of intersections and the number of roads in the city, the index of the intersection where the bar is located and the index of the intersection where the drunk man's house is, respectively.
- The ith of the following **m** lines contains two integers **ui** and **vi** — indices of the junctions connected by the ith road.

### Output

- If there is no strategy for him to reach home definitely, output -1 in a new line.
- Otherwise, print how many minutes the drunk man needs to get home in the worst possible scenario if he always behaves optimally in the Step 1 of every minute.

### Constraints

- 1 ≤ **T** ≤ 100000
- 3 ≤ **n**, **m** ≤ 300000
- 1 ≤ **s**, **t** ≤ **n**
- **s** ≠ **t**
- 1 ≤ **ui**, **vi** ≤ **n**
- **ui** ≠ **vi**
- It is guaranteed that it is possible to get from any junction to any other junction moving along the roads, each junction has at least two incident roads and no two roads connect the same pair of junctions.
- It is guaranteed that both the total number of intersections and the total number of roads over all test cases in one input file won't exceed 1000000

### Example

<pre>
<b>Input:</b>
2
4 5 1 2
1 3
1 4
3 4
2 4
2 3
6 9 1 6
1 2
1 3
2 3
2 4
2 5
3 4
3 5
4 6
5 6

<b>Output:</b>
2
-1
</pre>### Explanation

**Testcase 1**: Consider the strategy where the drunk man first moves to junction 3 in Step 1 of the first minute. Then in Step 3 of the first minute, he randomly picks the road to junction 2 or the road to junction 4. In case he had picked the road to junction 2, he reaches home in just 1 minute. If not, he ends up at junction 4 at the end of the first minute. Then, in Step 1 of the second minute, he picks the road between 4 and 2, and goes to junction 2, thus reaching his home in the second minute. Thus, no matter what random choices he makes in the Step 3's, he is guaranteed to reach his house within the first two minutes.

**Testcase 2**: You can show that in the worst case, the drunk man will could be stuck between among the junctions {1, 2, 3, 4, 5} forever.
