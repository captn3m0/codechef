---
{"category_name":"easy","problem_code":"PAPER","problem_name":"Folding Paper","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"25-01-2020","tags":{"0":"easy","1":"geometry","2":"kingofnumbers","3":"ltime80","4":"observation","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PAPER","time":{"view_start_date":1579971602,"submit_start_date":1579971602,"visible_start_date":1579971602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PAPER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME80/bengali/PAPER.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME80/mandarin/PAPER.pdf), [Russian](https://www.codechef.com/download/translated/LTIME80/russian/PAPER.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME80/vietnamese/PAPER.pdf) as well.

Chef has a rectangular piece of paper. He puts it on a big board in such a way that two sides of the paper are horizontal and two are vertical, and then he performs a sequence of $N$ operations. You are given a string $S$ with length $N$; for each valid $i$, the $i$-th character of $S$ determines the type of the $i$-th operation:
- 'R': Pick up the paper from the right side and fold it onto the left side.
- 'L': Pick up the paper from the left side and fold it onto the right side.
- 'U': Pick up the paper from the upper side and fold it onto the bottom side.
- 'D': Pick up the paper from the bottom side and fold it onto the upper side.

The paper is folded in such a way that there is still a flat rectangular sheet of paper lying on the table after each operation, but it consists of multiple layers of the original sheet. The lengths of the horizontal and vertical sides of the resulting sheet (after performing these $N$ operations) are $W$ and $H$ respectively. Let's build an Euclidean coordinate system on the paper, where the point $(0, 0)$ corresponds to the bottom left corner and $(W, H)$ to the upper right corner.

Chef then draws $M$ points on this folded sheet of paper. The ink used to draw them soaks deep into the paper, so each point is drawn on all layers of the paper (and also on both faces of each layer). 

Finally, Chef completely unfolds the paper. He's asking you to compute the distance between the nearest pair of points.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $N$, $M$, $W$ and $H$.
- The second line contains a single string $S$.
- Each of the following $M$ lines contains two space-separated integers $X$ and $Y$ denoting the coordinates of one point.

### Output
For each test case, print a single line containing one real number ― the minimum distance. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

### Constraints
- $1 \le T \le 50$
- $2 \le M \le 1,000$
- $1 \le N \le 1,000$
- $3 \le W, H \le 10^9$
- $1 \le X \le W-1$
- $1 \le Y \le H-1$
- the points are pairwise distinct

### Subtasks
**Subtask #1 (50 points):** all characters of $S$ are 'U'

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
6 2 10 10
ULRDDL
4 4
5 5
4 2 10 10
RUDL
1 1
9 9
```

### Example Output
```
1.41421356237
2.00000000000
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>