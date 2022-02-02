---
{"category_name":"hard","problem_code":"PSUM","problem_name":"Power Sum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 2 2\n1 2\n2 3\n1 4","output":65,"explanation":"Chef can make dishes using the following subsets of ingredients:\n- $\\{1\\}$ with tastiness $2^2 = 4$\n- $\\{2\\}$ with tastiness $3^2 = 9$\n- $\\{3\\}$ with tastiness $4^2 = 16$\n- $\\{1, 3\\}$ with total value $6^2 = 36$\n\nThe subsets $\\{1, 2\\}$, $\\{2, 3\\}$ and $\\{1, 2, 3\\}$ cannot be used because they are not affordable.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"rumblefool","problem_tester":null,"date_added":"15-08-2019","tags":{"0":"anand20","1":"convolution","2":"number","3":"polynomial","4":"power","5":"rumblefool","6":"sept19"},"problem_difficulty_level":"Hard","best_tag":"Power Series","editorial_url":"https://discuss.codechef.com/problems/PSUM","time":{"view_start_date":1568626202,"submit_start_date":1568626202,"visible_start_date":1568626202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PSUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT19/hindi/PSUM.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT19/bengali/PSUM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT19/mandarin/PSUM.pdf), [Russian](https://www.codechef.com/download/translated/SEPT19/russian/PSUM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT19/vietnamese/PSUM.pdf) as well.

Chef is preparing a brand new dish. He found $N$ new ingredients (numbered $1$ through $N$) for the dish. For each valid $i$, the $i$-th ingredient costs $C_i$ dollars and it has value $V_i$.

Chef has a budget: $S$ dollars. He can buy each ingredient at most once. A non-empty subset of these $N$ ingredients (possibly containing all ingredients) is called *affordable* if the sum of costs of all the ingredients in the subset does not exceed Chef's budget. The *tastiness* of a dish prepared using a set of ingredients is equal to $v^K$, where $v$ is the sum of values of all the ingredients in the set and $K$ is a fixed integer.

To make a dish, Chef should use an affordable subset of ingredients. He wants to try out all the dishes he can make. Find the total (summed up) tastiness of all these dishes. Since this number could be very large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains three space-separated integers $N$, $S$ and $K$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $C_i$ and $V_i$.

### Output
Print a single line containing one integer ― the total tastiness modulo $998,244,353$.

### Constraints 
- $1 \le N, S \le 100$
- $1 \le K \le 2,000$
- $1 \le C_i \le 100$ for each valid $i$
- $1 \le V_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (10 points)**: $1 \le N \le 20$

**Subtask #2 (30 points)**: $1 \le K \le 100$

**Subtask #3 (60 points)**: original constraints

### Example Input
```
3 2 2
1 2
2 3
1 4
```

### Example Output
```
65
```

### Explanation
Chef can make dishes using the following subsets of ingredients:
- $\{1\}$ with tastiness $2^2 = 4$
- $\{2\}$ with tastiness $3^2 = 9$
- $\{3\}$ with tastiness $4^2 = 16$
- $\{1, 3\}$ with total value $6^2 = 36$

The subsets $\{1, 2\}$, $\{2, 3\}$ and $\{1, 2, 3\}$ cannot be used because they are not affordable.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>