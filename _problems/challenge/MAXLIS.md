---
{"category_name":"challenge","problem_code":"MAXLIS","problem_name":"(Challenge) Maximizing LIS","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"alexey_adm","problem_tester":null,"date_added":"10-09-2019","tags":{"0":"alexey_adm","1":"challenge","2":"oct19","3":"r_64"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MAXLIS","time":{"view_start_date":1571045400,"submit_start_date":1571045400,"visible_start_date":1571045400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXLIS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT19/hindi/MAXLIS.pdf), [Bengali](https://www.codechef.com/download/translated/OCT19/bengali/MAXLIS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT19/mandarin/MAXLIS.pdf), [Russian](https://www.codechef.com/download/translated/OCT19/russian/MAXLIS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT19/vietnamese/MAXLIS.pdf) as well.

You are given an integer $K$ and a random permutation ― sequence $A_1, A_2, \ldots, A_N$ of integers $1$ through $N$. You have to perform the following process:
1. Split the permutation $A$ into $K$ non-empty contiguous subsequences $S_1, S_2, \dots, S_K$ such that each element of $A$ appears in exactly one of them.
2. Choose an arbitrary permutation $P$ of the integers $1$ through $K$.
3. Create a new permutation $B_1, B_2, \ldots, B_N$ by concatenating the sequences $S_{P_1}, S_{P_2}, \ldots, S_{P_K}$ in this order.

You are allowed to split the permutation $A$ into $K$ subsequences in any valid way and choose any permutation $P$ you want. Your goal is to make the length of the longest increasing subsequence of the permutation $B$ as large as possible.

### Input
- The first line of the input contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
Print a single line containing $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Constraints
- $5 \le N \le 5 \cdot 10^5$
- $3 \le K \le N$
- $1 \le A_i \le N$ for each valid $i$
- $A_i \neq A_j$ for each valid $i, j$ ($i \neq j$)

### Scoring
In each test case (and therefore each test file), let $L_A$ and $L_B$ be the lengths of the longest increasing subsequences of the permutations $A$ and $B$ respectively. If $L_B \le L_A$, your submission will receive the Wrong Answer verdict. Otherwise, your score for this test case is $(L_B - L_A) \cdot W$, where $W$ is a parameter of the grader. The values of $W$ for all tests are specified in the Test Generation section. The score of a submission is equal to the sum of its scores over all test cases. The goal is to maximise the score of your submission.

There are 18 test files. During the contest, the displayed score will account for exactly five test files (belonging to groups 1, 3, 5, 7, 9 from the test generation section), i.e. your score reflects your submission's performance on roughly 28% (5 / 18) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other $13$ test files.

### Example Input
```
7 3
5 3 7 1 2 6 4
```

### Example Output
```
1 2 6 4 5 3 7
```

### Explanation
The permutation $B = (1, 2, 6, 4, 5, 3, 7)$ could be obtained from $A = (5, 3, 7, 1, 2, 6, 4)$ in the following way:
1. Choose subsequences $S_1 = (5, 3)$, $S_2 = (7)$, $S_3 = (1, 2, 6, 4)$.
2. Choose the permutation $P = (3, 1, 2)$.
3. Concatenate $S_{P_1}, S_{P_2}, S_{P_3} = S_3, S_1, S_2 = (1, 2, 6, 4), (5, 3), (7)$.

The longest increasing subsequence of $A$ is $(1, 2, 6)$ and its length is $L_A = 3$. The longest increasing subsequence of $B$ is $(1, 2, 4, 5, 7)$ and its length is $L_B = 5$. If $W = 1$, the final score of this solution on this test case is $L_B - L_A = 5 - 3 = 2$.

### Test generation
There are nine test groups. In each test group, there are two test cases; the values of $N$, $K$ and $W$ (the scoring coefficient) are listed in the table below. In each test case, the permutation $A$ is chosen uniformly randomly among all $N!-1$ permutations other than $1, 2, \ldots, N-1, N$.

<table>
    <tr>
        <th>Group</th>
        <th>N</td>
        <th>K</td>
        <th>W</td>
    </tr>
    <tr>
        <td>1</td>
        <td>5 · 10<sup>3</sup></td>
        <td>50</td>
        <td>8284</td>
    </tr>
    <tr>
        <td>2</td>
        <td>5 · 10<sup>3</sup></td>
        <td>140</td>
        <td>4745</td>
    </tr>
    <tr>
        <td>3</td>
        <td>5 · 10<sup>3</sup></td>
        <td>400</td>
        <td>2124</td>
    </tr>
    <tr>
        <td>4</td>
        <td>5 · 10<sup>4</sup></td>
        <td>150</td>
        <td>2676</td>
    </tr>
    <tr>
        <td>5</td>
        <td>5 · 10<sup>4</sup></td>
        <td>450</td>
        <td>1484</td>
    </tr>
    <tr>
        <td>6</td>
        <td>5 · 10<sup>4</sup></td>
        <td>1500</td>
        <td>580</td>
    </tr>
    <tr>
        <td>7</td>
        <td>5 · 10<sup>5</sup></td>
        <td>500</td>
        <td>828</td>
    </tr>
    <tr>
        <td>8</td>
        <td>5 · 10<sup>5</sup></td>
        <td>1400</td>
        <td>474</td>
    </tr>
    <tr>
        <td>9</td>
        <td>5 · 10<sup>5</sup></td>
        <td>5000</td>
        <td>175</td>
    </tr>
</table>

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>