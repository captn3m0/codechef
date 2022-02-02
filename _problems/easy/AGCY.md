---
{"category_name":"easy","problem_code":"AGCY","problem_name":"Angry Cyborg","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hackcyborg","problem_tester":"","date_added":"15-12-2020","tags":{"0":"bytr2020","1":"easy","2":"hackcyborg"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/AGCY","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=AGCY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Cyborg Jenish is angry.

He has so much rage that he decided to go on a demolition spree for $Q$ days.

There are $N$ cities in his world numbered $1$ to $N$, in a row from left to right. That is the $i^{th}$ city from left side is city-$i$ where $1 \leq i \leq N$. The supreme leader of the world is VSM and there are infinite statues of VSM in each city.

On each day Jenish chooses two cities $L$ and $R$. He starts at city-$L$ and moves along the row towards right side till he reaches the city-$R$. In city-$L$ he destroys $1$ statue, in the next city (i.e. city-$L+1$) he destroys $2$ statues, and so on till city-$R$ where he destroys  $R-L+1$ statues. In other words, he destroys $i-L+1$ statues in the $i^{th}$ city ( $L\leq i\leq R$ ).

Find the total number of VSM statues he destroyed in each city after $Q$ days.

### Input:
- The first line contains an integer $T$, denoting the number of test cases.  
- The first line of each test case, contains two space-separated integers $N$ and $Q$ denoting the number of cities in his world and  the number of days he goes on a demolition spree respectively.  
- The $i^{th}$ line of next $Q$ lines of each test case contains two space-separated integers $L$ and $R$ denoting the starting city and the ending city respectively on $i^{th}$ day.

###Output:
- For each test case, output a single line containing $N$ space-separated integers.
- The $i^{th}$ integer should denote the total number of VSM statues destroyed by cyborg Jenish in the city-$i$ after $Q$ days.

### Constraints:
- $1 \leq  T \leq 10^3$  
- $ 1 \leq N \leq 10^5$  
- $1 \leq Q \leq 10^5$  
- $1\leq L \leq R \leq N$  
- The sum of $N$ over all test cases is less than $10^{6}$  
- The sum of $Q$ over all test cases is less than $10^{6}$   

### Sample Input:
```
2
5 3
1 3
1 2
4 5
2 1
1 1
```

### Expected Output:
```
2 4 3 1 2
1 0
```

### Explanation
In the first test case, the cyborg does the following:
- Starts at city-1 and goes till city-3, hence destroys $1$ statue in city-1, $2$ in city-2, and $3$ in city-3.  
- Starts at city-1 and goes till city-2, hence destroys $1$ statue in city-1 and $2$ in city-2.  
- Starts at city-4 and goes till city-5, hence destroys $1$ statue in city-4 and $2$ in city-5.  
- Hence he destroyed total $2$ statues in city-1, $4$ in city-2, $3$ in city-3, $1$ in city-4, and $2$ in city-5.  
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>