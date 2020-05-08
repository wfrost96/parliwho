import sys
import json

interest_searched = ""
for word in sys.argv[1:]:
    interest_searched += word + " "
interest_searched = interest_searched.rstrip()

from peers_list import *

relevant_peers_list = []
for peer in peers_list:
    if interest_searched in peer[1]:
        relevant_peers_list.append(peer[0])
#print(relevant_peers_list)

relevant_peers_str = ""
for peer in relevant_peers_list:
    relevant_peers_str += peer + ", "
relevant_peers_str = relevant_peers_str[:-2]

output = {'relevant_peers': str(relevant_peers_str), 'interest_searched': interest_searched}
print(json.dumps(output))
