---
{"category_name":"medium","problem_code":"WGTNKLC","problem_name":"Weighted Necklace","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":null,"date_added":"5-12-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WGTNKLC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given $K$ different colors of beads. A bead of the $i$-th color has a weight $w_i$. You have infinitely many beads of each color. All the beads of the same color have the same weight.  

You have to answer $q$ independent queries. For each query, you will be given $S$. You have to form a necklace consisting of $n$ beads such that the total weight of the necklace is $S$. You can use any number of beads of a single color (possibly zero). Count the number of distinct possible necklaces you can make. Two necklaces will be considered the same if one can be rotated to another.

### Input
- First line contains $n$, denoting the size of the necklace.
- Second line contains $K$, denoting the number of different colors.
- Third line contains $K$ space separated integers, where the $i$-th integer $w_i$ denotes the weight of a bead of color $i$.
- Fourth line contains $q$, denoting the number of queries.
- Each of the next $q$ lines will contain a single integer $S$, denoting the total weight of the necklace for this query.

### Output
 For each query, output in a new line, the number of valid necklaces mod $998244353$.

### Constraints 
- $1 \le n, q, K, w_i, S \le 10^5$
- $n$ will be a power of two

### Example Input
```
4
4
1 2 3 4
4
5
6
7
8
```

### Example Output
```
1
3
5
9
```

### Explanation
For S = 6, three ways to form the necklace are:
- 1 -> 1 -> 1 -> 3
- 1 -> 1 -> 2 -> 2
- 1 -> 2 -> 1 -> 2  
Please note, we do not count 2 -> 1 -> 1 -> 2 because it is just a rotation of 1 -> 1 -> 2 -> 2.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>