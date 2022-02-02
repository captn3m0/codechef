---
{"category_name":"hard","problem_code":"DDART","problem_name":"D-Dart","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1 4 4 32\r\n1 6 0 36\r\n1 10 10 200\r\n2 2 1\r\n2 9 5","output":"1\r\n0","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"22-10-2019","tags":{"0":"challenge","1":"convex","2":"geometry","3":"kmaaszraa","4":"nov19","5":"watcher"},"problem_difficulty_level":"Hard","best_tag":"Convex Hull","editorial_url":"https://discuss.codechef.com/problems/DDART","time":{"view_start_date":1573464602,"submit_start_date":1573464602,"visible_start_date":1573464602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DDART","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/DDART.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/DDART.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/DDART.pdf), [Russian](https://www.codechef.com/download/translated/NOV19/russian/DDART.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/DDART.pdf) as well.

Dr.D has recently come to believe that a normal game of darts is boring and easy, so he invented his own version and called it D-Dart.

First, Dr.D chooses a point on the wall and pins three dart rings to the wall at this point (since Dr.D has only one nail); it is only possible to pin a dart ring at a point that lies on its border. The exact position of this point is not important, since you are given the position of each ring explicitly, and there is nothing special about the positions of the rings relative to this point ― it is only guaranteed that the point lies on the border of each ring. Then, Dr.D starts throwing darts at the rings. To make the game highly challenging, Dr.D considers a throw *successful* only if it lands inside or on the border of **all the rings**.

Since Dr.D is beyond awesome, he sometimes feels like the game is not challenging enough, so he pins another ring to the wall at the same point with the same nail. All the rules described above still apply ― the position of the new ring relative to the chosen points is arbitrary, there is one more dart ring on the wall and a throw is successful only if it lands inside or on the border of all the rings.

You should process $Q$ queries of two types:
- `1 X Y C`: Dr.D adds a ring. The center of this ring is the point $(X, Y)$ and its radius is $R = \sqrt{C}$.
- `2 X Y`: Dr.D throws a dart at the point $(X, Y)$.

Note that the queries are encoded so that you have to process them online. Can you tell Dr.D which of his throws were unsuccessful?

### Input
- The first line of the input contains a single integer $Q$.
- The following $Q$ lines describe queries.
    - Each of these lines starts with an integer $T$ denoting the type of the current query.
    - If $T = 1$, it is followed by a space and three space-separated integers $A$, $B$ and $C$.
    - If $T = 2$, it is followed by a space and two space-separated integers $A$ and $B$.
    - The values of $X$ and $Y$ can be calculated in the following way:
        - If there have been no dart throws so far or the previous throw was unsuccessful, $X = A$ and $Y = B$.
        - Otherwise, $X = B$ and $Y = A$.

### Output
For each dart throw, print a single line containing the integer $1$ if it was successful or $0$ if it was unsuccessful.

### Constraints
- $3 \le Q \le 10^6$
- $T \in \{1, 2\}$
- $|A|, |B| \le 10^9$
- $1 \le C \le 10^{18}$
- no two rings coincide
- the first three events are of the first type
- there is at least one point which lies on the border of all the rings

### Subtasks
**Subtask #1 (30 points):** all the events of the first type happen before the events of the second type

**Subtask #2 (70 points):** original constraints

### Example Input
```
5
1 4 4 32
1 6 0 36
1 10 10 200
2 2 1
2 9 5
```

### Example Output
```
1
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>