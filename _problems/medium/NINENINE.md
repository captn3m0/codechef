---
{"category_name":"medium","problem_code":"NINENINE","problem_name":"Jake and His Halloween challenge","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"panik","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"combinatorics","1":"inclusn","2":"medium","3":"panik","4":"panik","5":"pelt2019"},"time":{"view_start_date":1547476200,"submit_start_date":1547476200,"visible_start_date":1547476200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Detective Jake Peralta is back with his Halloween bet with Captain Holt. This time the winner of the bet would be the person who finds the secret map of Brooklyn nine-nine first, which has been prepared and hidden somewhere around the building by Detective Amy Santiago.
Both Jake and Holt have seen the picture of the map once before Amy hid it.
This Map is in the form of an undirected connected Graph with $N$ Vertices and $M$ edges. 
The Graph contains no self-loops or multiple edges.

Using his detective skills at best, Jake has finally found this map, but as we know Jake is never happy with a simple win and he loves playing pranks. So he plans to replace this map with a new map and keep it at an easy location so that Captain Holt finds it and when the bet ends at midnight, he would wipe the smile off his face by showing him the original map. 

But Jake knows that Captain Holt has a great memory and he can not risk changing the entire map. He decides that he will remove $exactly$ $one$ $edge$ from the graph such that the graph remains $connected$ and put it somewhere else in the graph such that the $count$ of vertices having a $particular$ $degree$ $remain$ $the$ $same$ for each kind of available $degree$ in the original graph and the new graph Formed. 

The plan is great, but as we know Jake is lazy he needs your help to find out the $no.$ $of$ $possible$ $graphs$ matching the requirement other than the given graph.

$NINE-NINE!!!!!$

$Note-$ 

$1.)$Number of Edge Connections of a vertex is known as the $Degree$ of a vertex.

$2.)$While performing the process of removing an edge and later inserting it, the graph must remain connected throughout the whole process.

$3.)$ When an edge is inserted, $no$ multi-edges or self-loops must occur.

###Input:

- First line will contain $N$ and $M$, number of Vertices and Edges. Then in next $M$ lines the Connections follow. 
- Each line consists of a single line of input, two integers $X, Y$, denoting a connection between $V$<sub>$X$</sub> and $V$<sub>$Y$</sub>. 

###Output:

Output a single line containing the total no. of different possible graphs apart from the given graph.

###Constraints 
- $1 \leq N \leq 100000$
- $N-1 \leq M \leq 100000$
###Sample Input:
4 4

1 2

2 3

1 3

1 4
###Sample Output:
	4
	
###EXPLANATION:
If we remove edge $1-2$ we can put it between $3-4$.

If we remove edge $1-3$ we can put it between $2-4$.

If we remove edge $2-3$ we can put it between $2-4$ and we can also put it between $3-4$.

Removing edge $1-4$ is invalid. So total possible graphs are $1+1+2=4$

See that the Count of vertices having a particular degree remain the same in all the new graphs formed and the original graph i.e 
no. of 1 degree vertices= 1, 2 degree vertieces=2, 3 degree vertices=1 