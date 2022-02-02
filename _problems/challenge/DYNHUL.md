---
{"category_name":"challenge","problem_code":"DYNHUL","problem_name":"(Challenge) Dynamic Hull","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"15-06-2020","tags":{"0":"alei","1":"alei","2":"challenge","3":"dynamic","4":"greedy","5":"heuristic","6":"july20","7":"randomized"},"problem_difficulty_level":"Unavailable","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/DYNHUL","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DYNHUL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/DYNHUL.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/DYNHUL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/DYNHUL.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/DYNHUL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/DYNHUL.pdf) as well.

There are $N$ points in a plane (numbered $1$ through $N$). For each valid $i$, the coordinates of the $i$-th point are $(X_i,Y_i)$.

We want to remove all the points one by one; you should choose the order in which they are removed.

Whenever a point is removed, we compute the area of the <a href="https://en.wikipedia.org/wiki/Convex_hull">convex hull</a> of the remaining points. Then, we define a *penalty* $P$ as twice the sum of all these areas. It can be proved that $P$ is an integer.

Let $M$ be the penalty of an algorithm that always greedily chooses the point that minimises the area of the convex hull of the remaining points (if there is more than one such point, the point with the smallest $X$-coordinate is chosen; if there is still more than one point, then the point with the smallest $Y$-coordinate is chosen). You are given this penalty. Your goal is to find a removal order that results in a smaller penalty.

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.
- The last line contains a single integer $M$.

### Output
Print a single line containing $N$ space-separated integers ― a permutation of the integers $1$ through $N$ denoting the points in the order in which they should be removed.

### Constraints
- $N = 1024$
- $0 \le X_i, Y_i \le 512$ for each valid $i$

### Example Input
```
6
1 0
0 0
0 1
1 2
2 1
1 1
5
```

### Example Output
```
5 2 3 1 4 6
```

### Explanation
The points $1$ through $6$ are marked $\mathsf{A}$ through $\mathsf{F}$ in the following figure.

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/DYNHUL/DYNHUL.png"></img>
- After removing the point marked $\mathsf{E}$, the convex hull of the remaining points is the quadrilateral $\mathsf{ABCD}$.
- After the points $\mathsf{B}$ and $\mathsf{C}$ are also removed, the remaining points $\mathsf{A}$, $\mathsf{F}$ and $\mathsf{D}$ are collinear, so the convex hull has zero area.

The penalty $P$ is $2 \cdot (3/2+1+0+0+0) = 5$.

### Test Generation
There are four groups of test files and two test files in each group.
- In each file in group 1, the coordinates of all points are chosen uniformly randomly and independently between $1$ and $512$ inclusive.
- In each file in group 2, the points are chosen in the following way:
    - Consider the square $S$ whose lower left corner is $(0,0)$ and upper right corner is $(512, 512)$.
    - Generate a set of points by repeating the following process:
        - Choose two points $P$ and $Q$ with integer coordinates on the perimeter of $S$ uniformly randomly.
        - Consider all points with integer coordinates on the line segment $\mathsf{PQ}$.
        - Sort these points first by non-decreasing $X$-coordinate and then by non-decreasing $Y$-coordinate.
        - Add these points to the set, in this order.
    - The process stops as soon as the set contains $N$ pairwise distinct points.
- In each file in group 3, the points are generated similarly to group 2, but the points $P$ and $Q$ are always chosen uniformly randomly among all points with integer coordinates inside or on the perimeter of the square $S$.
- In each file in group 4, the points are generated similarly to group 2, but $P$ is always the point $(256,256)$.

### Scoring
If $P \gt M$, you will receive the Wrong Answer verdict; otherwise, the score of a test file is $M-P$. The score of a submission is the sum of scores of all test files. Your goal is to maximise the score of your submission.

There are eight test files. During the contest, the displayed score will account for exactly one test file from each group, i.e. your score reflects your submission's performance on 50% (4/8) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 4 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>