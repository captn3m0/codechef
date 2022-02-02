---
{"category_name":"medium","problem_code":"GRAND","problem_name":"Random Permutation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"karpovich","problem_tester":"","date_added":"20-06-2021","tags":{"0":"cook130","1":"dynamic","2":"karpovich","3":"medium","4":"segment","5":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/GRAND","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GRAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/GRAND.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/GRAND.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/GRAND.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/GRAND.pdf) as well.

Chef has a random permutation $P_1, P_2, \ldots, P_N$ and an integer $K$.

A subsequence (not necessarily contiguous) of this permutation is called *good* if it has at most $K$ pairs of neighbouring elements such that the left element is larger than the right element.

Chef wants to know the maximum length of a good subsequence of his permutation. Can you help him?

### Input
- The first line of the input contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
Print a single line containing one integer ― the maximum length of a good subsequence.

### Constraints
- $0 \le K \lt N \le 50,000$
- $1 \le P_i \le N$ for each valid $i$
- the permutation is chosen uniformly randomly among all permutations of the integers $1$ through $N$; note that $K$ is not independent from the chosen permutation (it can be chosen differently depending on the permutation)

### Example Input
```
8 1
2 7 6 3 4 1 8 5
```

### Example Output
```
5
```

### Explanation
One good subsequence with the maximum length is $[2, 3, 4, 1, 5]$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>